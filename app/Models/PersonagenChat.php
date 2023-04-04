<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonagenChat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function personagen()
    {
        return $this->belongsTo(Personagen::class);
    }

    public function mensagens(){
        return $this->hasMany(Mensagens::class, 'hash', 'hash_personagem');
    }

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }
}
