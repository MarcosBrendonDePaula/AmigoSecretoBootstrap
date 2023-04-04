<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmigoSecreto extends Model
{
    use HasFactory;

    protected $fillable = [
        'dono_id',
        'valor_minimo',
        'valor_maximo',
        'data_inicio',
        'maximo_participantes',
        'sorteado',
        'encerrado',
        'nome'
    ];

    public function dono()
    {
        return $this->belongsTo(User::class, 'dono_id');
    }

    public function participacoes(){
        return $this->hasMany(Participacao::class);
    }

    public function convites(){
        return $this->hasMany(Convite::class);
    }
}
