<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Exercicio3Controller extends Controller
{
    public function index()
    {
        return view('exe_03');
    }

    public function resultado(Request $request): string
    {
        $valor = $request->valor;
        if ($valor > 10)
            return "Número digitado foi $valor, e o mesmo é maior do que 10";
        else if ($valor < 10)
            return "Número digitado foi $valor, e o mesmo é menor do que 10";
        else
            return "Número igual a 10!";
    }
}
