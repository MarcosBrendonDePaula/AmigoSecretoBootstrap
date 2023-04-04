<div>
    <div class="modal fade" id="AmigoSecretoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="AmigoSecretoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AmigoSecretoModalLabel">Editor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <livewire:amigo-secreto.instancia :id="$idSelecionado" key="{{ now() }}" />
                </div>
            </div>
        </div>
    </div>



    <div class="m-5">
        <h5>Seus Eventos</h5>
        <div class="row">

            <div class="col-sm-3 mt-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">INI</h5>
                        <p class="card-text"></p>
                        <button type="button" wire:click="novo" class="btn btn-primary">
                            Criar Novo Evento
                        </button>
                    </div>
                </div>
            </div>

            @foreach ($amigosSecretos as $Key => $AmigoSecretos)
                <div class="col-sm-3 mt-1">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $AmigoSecretos->nome }}</h5>
                            <p class="card-text"></p>
                            <button type="button" wire:click="selecionar({{$AmigoSecretos->id}})" class="btn btn-info">
                                <i class="bi bi-pen"></i>
                            </button>
                            <button type="button" wire:click="deletar({{$Key}})" class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="m-5">
        <h5>Participaçoes</h5>
        <div class="row">
            <div class="col-sm-3 mt-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">INI</h5>
                        <p class="card-text"></p>
                        <button type="button" wire:click="novo" class="btn btn-primary">
                            Entrar com Convite
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push("scripts")
<script>
    document.addEventListener('livewire:load', function () {
            window.addEventListener('amigo.secreto.modal', (ev)=>{
                switch (ev.detail.view) {
                    case "show":
                        $('#AmigoSecretoModal').modal('show')
                        break;
                    case "hide":{
                        $('#AmigoSecretoModal').modal('hide')
                        break;
                    }
                    default:
                        break;
                }

            })
        })
</script>
@endpush
