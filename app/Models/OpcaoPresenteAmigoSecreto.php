<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcaoPresenteAmigoSecreto extends Model
{
    use HasFactory;
    protected $fillable = ['amigosecreto_id', 'opcao_presente_id'];

    public function amigoSecreto()
    {
        return $this->belongsTo(AmigoSecreto::class);
    }

    public function opcaoPresente()
    {
        return $this->belongsTo(OpcaoPresente::class);
    }

}
