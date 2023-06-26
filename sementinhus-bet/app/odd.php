<?php 

namespace App;

use Illuminate\Database\Eloquent\Models;

class Odd extends Models
{
    protected $fillable = [
        "id", "id_partida", "odds_ganhador",
    ];
}
