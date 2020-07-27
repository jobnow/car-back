<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    public function index()
    {
        //Método mais simples, para se mostrar todos os veiculos cadastrados
        return Veiculo::all();
    }
 
    public function show($id)
    {
        //Mostrando um veiculo específico pelo seu id
        return $veiculo = Veiculo::find($id);

        //Validando se o veiculo não existir
        if(!$veiculo) {
            return response()->json(['error' => 'O veiculo requerido não existe, veja se o id está correto']);
        }
    }

    public function store(Request $request)
    {
        //Utilizando o método mais simples, para se criar o veiculo
        return Veiculo::create($request->all());
    }

    public function update(Request $request, $id)
    {
        //Puxando o id do veiculo
        $veiculo = Veiculo::findOrFail($id);

        //Validando se ele existe
        if(!$veiculo) {
            return response()->json(['error' => 'O veiculo requerido não existe, veja se o id está correto']);
        }

        //Atualizando as informações do veiculo
        $veiculo->update($request->all());

        //Retornando o veiculo já com as novas informações
        return $veiculo;
    }

    public function delete(Request $request, $id)
    {
        //Puxando o veiculo pelo id
        $veiculo = Veiculo::findOrFail($id);

        //E pegando a váriavel que o representa e o deletando 
        $veiculo->delete();

        //Retornando com o código de sucesso ao deletar
        return 204;
    }
}
