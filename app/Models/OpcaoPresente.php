<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcaoPresente extends Model
{
    use HasFactory;
    protected $fillable = [
        'amigosecreto_id',
        'user_id',
        'nome',
        'valor',
        'local_encontrado',
        'foto',
        'preferencia'
    ];

    public function amigoSecreto()
    {
        return $this->hasMany(AmigoSecreto::class);
    }

    public function opcaoPresentes(){
        return $this->hasMany(OpcaoPresenteAmigoSecreto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
