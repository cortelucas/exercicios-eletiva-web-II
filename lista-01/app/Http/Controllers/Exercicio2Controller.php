<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Exercicio2Controller extends Controller
{
    public function index()
    {
        return view('exe_02');
    }

    public function resultado(Request $request): string
    {
        $valor = $request->valor;
        $qnt_kilos = $request->qnt_kilos;

        return "O valor a ser pago é: ".($qnt_kilos * $valor);
    }
}
