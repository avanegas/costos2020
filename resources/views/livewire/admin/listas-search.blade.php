
<div class="card">
        <div class="card-header">
            <button class="btn btn-warning btn-block"><strong>Borrar datos en esta linea. .  .?</strong></button>
        </div>

        <div class="card-header form-inline">
            <div class="col-8">
                <input wire:model="search" type="text" class="w-100 form-control"  placeholder="Buscar...">
            </div>
            <div class="col-3">
                <select wire:model="perPage" class="form-control w-100">
                    <option value="10">10 por página</option>
                    <option value="50">50 por página</option>
                    <option value="100">100 por página</option>
                </select>
            </div>
            <div class="col">
                @if($search !=='')
                    <button wire:click="clear" class="form-control w-100">X</button>
                @endif
            </div>
        </div>

        @if ($equipos->count())
            <div class="card-body">
                <table class="table table-striped"> <!--<table class="table-fixed w-full">-->
                    <thead>
                        <tr>
                            <th>Grupo</th>
                            <th>Equipo</th>
                            <th>Marca</th>
                            <th>Tipo</th>
                            <th>Tarífa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equipos as $key=>$equipo)
                            <tr>
                                <td>{{ $equipo->grupo_equipo->name }}</td>
                                <td>{{ $equipo->name }}</td>
                                <td>{{ $equipo->marca }}</td>
                                <td>{{ $equipo->tipo }}</td>
                                <td>{{ $equipo->tarifa }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="card-footer d-flex justify-content-end">
                    {{$equipos->links()}}
                </div>
            </div>
        @else
            <div class="card-body">
                <strong>No existe ningún registro.</strong>
            </div>
        @endif
    </div>

