<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


class Exercicio1Controller extends Controller
{
    public function index()
    {
        return view('exe_01');
    }

    public function resultado(Request $request)
    {
        $valor = $request->valor;
        $pagamento = $request->pagamento;
        if ($valor < $pagamento){
            return "O troco é:".($pagamento - $valor);
        } else if ($valor == $pagamento){
            return "Não há troco!";
        } else {
            return "Pagamento insuficiente!";
        }
    }
}
