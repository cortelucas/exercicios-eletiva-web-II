<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Exercicio4Controller extends Controller
{
    public function index()
    {
        return view('exe_04');
    }

    public function resultado(Request $request): string
    {
        $valor = $request->valor;
        if ($valor > 0)
            return "Valor Positivo";
        else if ($valor < 0)
            return "Valor Negativo";
        else
            return "Número igual a 0!";
    }
}
