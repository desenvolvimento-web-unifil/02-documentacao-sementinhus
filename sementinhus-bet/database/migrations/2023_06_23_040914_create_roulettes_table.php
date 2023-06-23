<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('roulette_bets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Coluna para associar a aposta a um usuário
            $table->string('cor'); // Coluna para armazenar a cor da aposta (vermelho, preto, branco)
            $table->float('valor'); // Coluna para armazenar o valor da aposta
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apostas');
    }
};
