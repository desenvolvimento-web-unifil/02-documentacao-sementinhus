<?php

namespace App\Http\Controllers;

use App\Models\RouletteBet;
use Illuminate\Http\Request;

class RouletteController extends Controller
{
    public function index()
    {
        return view('roulette');
    }

    public function store(Request $request)
    {
           // Lógica para verificar o número sorteado
    $numeroSorteado = mt_rand(0, 36); // Gera um número aleatório entre 0 e 36

    $numeroEscolhido = $request->input('numero');

    if ($numeroEscolhido == $numeroSorteado) {
        // O usuário ganhou a aposta
        // Atualize a pontuação do usuário, registre a aposta vencedora, etc.
        $mensagem = "Parabéns! Você acertou o número sorteado.";
    } else {
        // O usuário perdeu a aposta
        $mensagem = "Que pena! Você não acertou o número sorteado.";
    }

    return view('roleta.resultado', compact('mensagem', 'numeroSorteado'));
    }
}
