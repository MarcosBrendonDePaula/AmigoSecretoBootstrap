<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chave extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'tirou_user_id',
        'visualizado'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function usuarioQueTirou()
    {
        return $this->belongsTo(User::class, 'tirou_user_id');
    }
}
