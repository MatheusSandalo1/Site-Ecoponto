<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\EcopontoModel;


class EcopontoController extends Controller
{
    public function index()
    {
        $ecoponto = EcopontoModel::all();
        //dd($usuarios);
        return view('admin.ecoponto.index', [
            'ecoponto' => $ecoponto,
        ]);
    }


    public function create()
    {
        return view('admin.ecoponto.cadastrar', [
            'ecoponto' => new EcopontoModel()
        ]);
    }


    public function store(Request $request)
    {

        //dd($request);
        $request->validate([
            'nome' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'cep' => 'required',
            'funcionamento' => 'required',
            'telefone' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);

        try {

            $ecoponto = new EcopontoModel();
            $ecoponto->nome = $request->nome;
            $ecoponto->rua = $request->rua;
            $ecoponto->bairro = $request->bairro;
            $ecoponto->cidade = $request->cidade;
            $ecoponto->estado = $request->estado;
            $ecoponto->cep = $request->cep;
            $ecoponto->funcionamento = $request->funcionamento;
            $ecoponto->telefone = $request->telefone;
            $ecoponto->longitude = $request->longitude;
            $ecoponto->latitude = $request->latitude;
            $ecoponto->save();

            return redirect()->route('admin.ecoponto.index')->with('sucesso', 'Usuário cadastrado com sucesso');
        } catch (\Exception $e) {

            dd($e->getMessage());

            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao cadastrar, por favor tente novamente');
        }
    }



    public function edit($id)
    {
        return view('admin.ecoponto.editar', [
            'ecoponto' => EcopontoModel::findOrFail($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        //dd($request);
        $request->validate([
            'nome' => 'required',
            'cep' => "required|unique:users,id,{$id}",
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'funcionamento' => 'required',
            'telefone' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);

        try {

            $ecoponto = EcopontoModel::findOrFail($id);
            $ecoponto->nome = $request->nome;
            $ecoponto->rua = $request->rua;
            $ecoponto->bairro = $request->bairro;
            $ecoponto->cidade = $request->cidade;
            $ecoponto->estado = $request->estado;
            $ecoponto->cep = $request->cep;
            $ecoponto->funcionamento = $request->funcionamento;
            $ecoponto->telefone = $request->telefone;
            $ecoponto->longitude = $request->longitude;
            $ecoponto->latitude = $request->latitude;
            $ecoponto->save();

            return redirect()->route('admin.ecoponto.index')->with('sucesso', 'Instrução editada com sucesso');
        } catch (\Exception $e) {

            //dd($e->getMessage());

            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao editar, por favor tente novamente');
        }
    }


    public function destroy($id)
    {
        try {
            EcopontoModel::findOrFail($id)->delete();

            return redirect()->route('admin.ecoponto.index')->with('sucesso', 'Instrução deletada com sucesso');
        } catch (Exception $e) {

            return redirect()->back()->with('erro', 'Ocorreu um erro ao deletar, por favor tente novamente');
        }
    }
}
