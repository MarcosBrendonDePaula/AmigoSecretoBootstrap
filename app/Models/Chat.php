<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'amigosecreto_id',
        'regras',
    ];

    public function amigoSecreto()
    {
        return $this->belongsTo(AmigoSecreto::class);
    }

    public function mensagens(){
        return $this->hasMany(Mensagens::class);
    }

    public function personagensChat(){
        return $this->hasMany(Personagen::class);
    }

}
