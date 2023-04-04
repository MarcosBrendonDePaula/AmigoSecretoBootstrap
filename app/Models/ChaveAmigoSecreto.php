<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChaveAmigoSecreto extends Model
{
    use HasFactory;
    
    public function amigoSecreto()
    {
        return $this->belongsTo(AmigoSecreto::class);
    }

    public function chave()
    {
        return $this->belongsTo(Chave::class);
    }
}
