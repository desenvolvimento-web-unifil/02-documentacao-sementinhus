<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class RouletteBet extends Model
{
    protected $fillable = [
        'cor', 
        'valor',
    ];

    // Relacionamento com o usuário que fez a aposta
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
