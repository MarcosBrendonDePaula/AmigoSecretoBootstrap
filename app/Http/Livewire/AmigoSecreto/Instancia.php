<?php

namespace App\Http\Livewire\AmigoSecreto;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\AmigoSecreto;

class Instancia extends Component
{
    public AmigoSecreto $instancia;
    public $novaInstancia = true;
    public $_id;

    protected $rules = [
        'instancia.nome' => 'required|min:3|max:255',
        'instancia.maximo_participantes' => 'required|gt:1',
        'instancia.valor_minimo' => 'required|gt:-1',
        'instancia.valor_maximo' => 'required|gt:-1',
        'instancia.data_inicio'  => 'required'
    ];

    protected $messages = [
        'instancia.nome.required' => 'O nome do evento é obrigatório.',
        'instancia.nome.min' => 'O nome do evento deve ter pelo menos 3 caracteres.',
        'instancia.nome.max' => 'O nome do evento deve ter no máximo 255 caracteres.',
        'instancia.maximo_participantes.required' => 'O número máximo de participantes é obrigatório.',
        'instancia.maximo_participantes.gt' => 'O número máximo de participantes deve ser maior que 0.',
        'instancia.valor_minimo.required' => 'O valor mínimo é obrigatório.',
        'instancia.valor_minimo.gt' => 'O valor mínimo deve ser maior que 0.',
        'instancia.valor_maximo.required' => 'O valor máximo é obrigatório.',
        'instancia.valor_maximo.gt' => 'O valor máximo deve ser maior que 0.',
        'instancia.data_inicio.required' => 'A data de início é obrigatória.'
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function mount($id=-1){
        $this->instancia = new AmigoSecreto();
        $this->_id = $id;
        $this->novaInstancia = true;
        if($id >= 0){
            $this->novaInstancia = false;
            $this->instancia = AmigoSecreto::find($id);
        }
    }

    public function reload(){

    }

    public function save(){
        //
        $res = $this->validate();
        $this->instancia->dono_id = Auth::user()->id;
        $this->instancia->save();
        $this->emit('amigo.secreto.Update');
    }

    public function render()
    {
        return view('livewire.amigo-secreto.instancia');
    }
}
