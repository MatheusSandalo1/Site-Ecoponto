<?php

namespace App\Http\Controllers;

use App\Models\InstrucaoModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class InstrucoesController extends Controller
{
    public function index()
    {
        $instrucoes = User::all();
        //dd($usuarios);
        return view('admin.instrucoes.index', [
            'instrucoes' => $instrucoes,
        ]);
    }


    public function create()
    {
        return view('admin.instrucoes.cadastrar', [
            'instrucoes' => new User()
        ]);
    }


    public function store(Request $request)
    {

        //dd($request);
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'imagem' => 'required'
        ]);

        try {

            $instrucoes = new InstrucaoModel();
            $instrucoes->titulo = $request->titulo;
            $instrucoes->descricao = $request->descricao;
            $instrucoes->imagem = $request->imagem->storeAs('imagem', 'novonome.jpg');
            $instrucoes->save();

            return redirect()->route('admin.instrucoes.index')->with('sucesso', 'Usuário cadastrado com sucesso');
        } catch (\Exception $e) {

            dd($e->getMessage());

            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao cadastrar, por favor tente novamente');
        }
    }



    public function edit($id)
    {
        return view('admin.instrucoes.editar', [
            'instrucoes' => InstrucaoModel::findOrFail($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        //dd($request);
        $request->validate([
            'titulo' => 'required',
            'descricao' => "required|unique:users,id,{$id}",
            'imagem' => 'required'
        ]);

        try {

            $instrucoes = InstrucaoModel::findOrFail($id);
            $instrucoes->titulo = $request->titulo;
            $instrucoes->descricao = $request->descricao;
            $instrucoes->save();

            return redirect()->route('admin.instrucoes.index')->with('sucesso', 'Instrução editada com sucesso');
        } catch (\Exception $e) {

            //dd($e->getMessage());

            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao editar, por favor tente novamente');
        }
    }


    public function destroy($id)
    {
        try {
            User::findOrFail($id)->delete();

            return redirect()->route('admin.instrucoes.index')->with('sucesso', 'Instrução deletada com sucesso');
        } catch (Exception $e) {

            return redirect()->back()->with('erro', 'Ocorreu um erro ao deletar, por favor tente novamente');
        }
    }
}
