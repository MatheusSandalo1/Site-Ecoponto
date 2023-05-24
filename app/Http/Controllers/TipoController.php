<?php

namespace App\Http\Controllers;

use App\Models\TipoModel;
use Illuminate\Http\Request;
use SebastianBergmann\Type\Exception;

class TipoController extends Controller
{
    public function index()
    {
        $tipo = TipoModel::all();
        //dd($usuarios);
        return view('admin.tipo.index', [
            'instrucoes' => $tipo,
        ]);
    }


    public function create()
    {
        return view('admin.tipo.cadastrar', [
            'instrucoes' => new TipoModel()
        ]);
    }


    public function store(Request $request)
    {

        //dd($request);
        $request->validate([
            'residuos' => 'required',
        ]);

        try {

            $tipo = new TipoModel();
            $tipo->residuos = $request->residuos;
            $tipo->save();

            return redirect()->route('admin.tipo.index')->with('sucesso', 'Usuário cadastrado com sucesso');
        } catch (\Exception $e) {

            dd($e->getMessage());

            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao cadastrar, por favor tente novamente');
        }
    }



    public function edit($id)
    {
        return view('admin.tipo.editar', [
            'instrucoes' => TipoModel::findOrFail($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        //dd($request);
        $request->validate([
            'residuos' => 'required',

        ]);

        try {

            $tipo = TipoModel::findOrFail($id);
            $tipo->residuos = $request->tipo;
            $tipo->save();

            return redirect()->route('admin.tipo.index')->with('sucesso', 'Instrução editada com sucesso');
        } catch (\Exception $e) {

            //dd($e->getMessage());

            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao editar, por favor tente novamente');
        }
    }


    public function destroy($id)
    {
        try {
            TipoModel::findOrFail($id)->delete();

            return redirect()->route('admin.tipo.index')->with('sucesso', 'Instrução deletada com sucesso');
        } catch (Exception $e) {

            return redirect()->back()->with('erro', 'Ocorreu um erro ao deletar, por favor tente novamente');
        }
    }
}
