<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function index()
    {
        $usuarios = User::all();
        //dd($usuarios);
        return view('admin.usuarios.index', [
            'usuarios' => $usuarios,
            'meuNome' => "Edson Rodrigues"
        ]);
    }


    public function create()
    {
        return view('admin.usuarios.cadastrar', [
            'usuario' => new User()
        ]);
    }


    public function store(Request $request)
    {

        //dd($request);
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        try {

            $usuario = new User();
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->password = bcrypt($request->password);
            $usuario->save();

            return redirect()->route('admin.usuarios.index')->with('sucesso', 'Usuário cadastrado com sucesso');
        } catch (\Exception $e) {

            //dd($e->getMessage());

            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao cadastrar, por favor tente novamente');
        }
    }



    public function edit($id)
    {
        return view('admin.usuarios.editar', [
            'usuario' => User::findOrFail($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        //dd($request);
        $request->validate([
            'nome' => 'required',
            'email' => "required|email|unique:users,id,{$id}",
            'password' => 'sometimes|nullable|min:8'
        ]);

        try {

            $usuario = User::findOrFail($id);
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;

            if (!empty($request->password)) {
                $usuario->password = bcrypt($request->password);
            }

            $usuario->save();

            return redirect()->route('admin.usuarios.index')->with('sucesso', 'Usuário editado com sucesso');
        } catch (\Exception $e) {

            //dd($e->getMessage());

            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao editar, por favor tente novamente');
        }
    }


    public function destroy($id)
    {
        try {
            User::findOrFail($id)->delete();

            return redirect()->route('admin.usuarios.index')->with('sucesso', 'Usuário deletado com sucesso');
        } catch (Exception $e) {

            return redirect()->back()->with('erro', 'Ocorreu um erro ao deletar, por favor tente novamente');
        }
    }
}
