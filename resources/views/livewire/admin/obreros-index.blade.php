<div class="card">
    <div class="card-header form-inline">
        <div class="col-8">
            <input wire:model="search" type="text" class="w-100 form-control" placeholder="Ingrese un obrero">
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

    @if ($obreros->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Grupo</th>
                    <th>Obrero</th>
                    <th>Jornal/hora</th>
                    <th>Factor</th>
                    <th>Creado</th>
                    <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($obreros as $obrero)
                    <tr>
                        <td>{{$obrero->id}}</td>
                        <td>{{$obrero->grupo_obrero->name}}</td>
                        <td>{{$obrero->name}}</td>
                        <td>{{$obrero->jornalhora}}</td>
                        <td>{{$obrero->factor}}</td>
                        <td>{{$obrero->created_at->diffForHumans()}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.obreros.edit', $obrero)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.obreros.destroy', $obrero)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <div class="card-footer d-flex justify-content-end">
            {{$obreros->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existe ningún registro.</strong>
        </div>
    @endif

</div>
