<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'amigosecreto_id',
        'user_id'
    ];

    public function amigoSecreto()
    {
        return $this->belongsTo(AmigoSecreto::class, 'amigosecreto_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
