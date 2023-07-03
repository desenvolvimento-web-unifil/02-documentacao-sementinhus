<?php

namespace App\Http\Controllers;

use App\Models\RouletteBet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouletteController extends Controller
{
    public function index()
    {
        return view('roulette');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cor' => 'required',
            'valor' => 'required|numeric|min:0',
        ]);

        $aposta = new RouletteBet();
        $aposta->cor = $request->cor;
        $aposta->valor = $request->valor;
        $aposta->user_id = Auth::id(); // Atribuir o ID do usuário autenticado

        $aposta->save();

        return redirect()->back()->with('success', 'Aposta realizada com sucesso!');
    }
}
