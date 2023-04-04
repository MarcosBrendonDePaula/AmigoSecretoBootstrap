<div class="card text-center mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="nome" wire:model.lazy='instancia.nome' class="form-control" id="nome" placeholder="evento">
                    <label for="evento">Nome do Evento</label>
                </div>
                @error('instancia.nome')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="number" min="1" wire:model.lazy="instancia.maximo_participantes" value="{{$instancia->maximo_participantes}}" class="form-control" id="maximo_particip">
                    <label for="maximo_particip">Maximo de Participantes</label>
                </div>
                @error('instancia.maximo_participantes')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="number" step="0.01" min="0.01" wire:model.lazy="instancia.valor_minimo" value="{{$instancia->valor_minimo}}" class="form-control" id="v_min">
                    <label for="v_min">Valor Minimo</label>
                </div>
                @error('instancia.valor_minimo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="number" step="0.01" min="0.01" wire:model.lazy="instancia.valor_maximo" value="{{$instancia->valor_maximo}}" class="form-control" id="v_max">
                    <label for="v_min">Valor Maximo</label>
                    @error('instancia.valor_maximo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="datetime-local" wire:model.lazy="instancia.data_inicio" value="{{$instancia->data_inicio}}" class="form-control" id="data_ini">
                    <label for="data_ini">Data de Inicio</label>
                    @error('instancia.data_inicio')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-primary" wire:click='save'>@if(!$novaInstancia) SALVAR @else CRIAR @endif</a>
    </div>
</div>
