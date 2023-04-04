<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convite extends Model
{
    use HasFactory;

    protected $fillable = [
        'amigosecreto_id',
        'token',
        'restante_de_utilizacao'
    ];

    public function amigoSecreto()
    {
        return $this->belongsTo(AmigoSecreto::class, 'amigosecreto_id');
    }
}
