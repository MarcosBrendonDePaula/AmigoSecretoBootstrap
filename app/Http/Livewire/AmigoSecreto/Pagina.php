<?php

namespace App\Http\Livewire\AmigoSecreto;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Pagina extends Component
{

    public $amigosSecretos = [];
    public $idSelecionado = -1;

    protected $listeners = ['amigo.secreto.Update' => 'UpdateLista'];

    public function deletar($pos){
        if($this->idSelecionado == $this->amigosSecretos[$pos]->id){
            $this->idSelecionado = -1;
        }

        $this->amigosSecretos[$pos]->delete();
        $this->UpdateLista();
    }

    public function UpdateLista(){
        $this->dispatchBrowserEvent('amigo.secreto.modal',['view'=>"hide"]);
        $this->amigosSecretos = Auth::user()->donoAmigoSecretos;
    }


    public function selecionar($id){
        $this->idSelecionado = $id;
        $this->dispatchBrowserEvent('amigo.secreto.modal',['view'=>"show"]);
    }

    public function novo(){
        $this->idSelecionado = -1;
        $this->dispatchBrowserEvent('amigo.secreto.modal',['view'=>"show"]);
    }

    public function mount(){
        $this->amigosSecretos = Auth::user()->donoAmigoSecretos;
    }

    public function render()
    {
        return view('livewire.amigo-secreto.pagina');
    }
}
