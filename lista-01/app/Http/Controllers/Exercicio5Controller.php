<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Exercicio5Controller extends Controller
{
    public function index()
    {
        return view('exe_05');
    }

    public function resultado(Request $request): string
    {
        $nota_01 = $request->nota_01;
        $nota_02 = $request->nota_02;
        $nota_03 = $request->nota_03;
        $nota_04 = $request->nota_04;

        $media = ($nota_01+$nota_02+$nota_03+$nota_04)/4;

        if($media >= 7)
            echo "Sua média foi $media. Parabéns, você foi Aprovado!";
        else
            echo "Sua média foi $media. Infelizmente, você foi Reprovado!";
    }
}
