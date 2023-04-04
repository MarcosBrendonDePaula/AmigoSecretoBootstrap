<?php

namespace App\Http\Livewire\AmigoSecreto\Convite;


use Illuminate\Support\Facades\Auth;
use App\Models\AmigoSecreto;
use Livewire\Component;


class Convites extends Component
{
    public $convites = [];
    public $idSelecionado = -1;
    public AmigoSecreto $AmigoSecreto;
    protected $listeners = ['amigo.secreto.convite.Update' => 'UpdateLista'];

    public function deletar($pos){
        if($this->idSelecionado == $this->convites[$pos]->id){
            $this->idSelecionado = -1;
        }

        $this->convites[$pos]->delete();
        $this->UpdateLista();
    }

    public function UpdateLista(){
        $this->dispatchBrowserEvent('amigo.secreto.convite.modal',['view'=>"hide"]);
        $this->convites = Auth::user()->donoAmigoSecretos;
    }


    public function selecionar($id){
        $this->idSelecionado = $id;
        $this->dispatchBrowserEvent('amigo.secreto.convite.modal',['view'=>"show"]);
    }

    public function novo(){
        $this->idSelecionado = -1;
        $this->dispatchBrowserEvent('amigo.secreto.convite.modal',['view'=>"show"]);
    }

    public function mount(AmigoSecreto $amigoSecreto){
        $this->AmigoSecreto = $amigoSecreto;
        $this->convites = $this->AmigoSecreto->convites;
    }

    public function render()
    {
        return view('livewire.amigo-secreto.convite.convites');
    }
}
