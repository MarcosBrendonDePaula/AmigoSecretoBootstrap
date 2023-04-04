<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;
    protected $fillable = [
        'chat_id',
        'texto',
        'hash_personagem'
    ];

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }

    public function personagem()
    {
        return $this->belongsTo(PersonagenChat::class, 'hash_personagem', 'hash');
    }
}
