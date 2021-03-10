<div class="card">
    <div class="card-header form-inline">
        <div class="col-8">
             <input wire:model="search" type="text" class="w-100 form-control" placeholder="Ingrese un precio unitario">
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

    @if ($precios->count())
        <div class="card-body">
            <table  class="table table-striped">
                <thead>
                <tr>
                    <th>Grupo</th>
                    <th>Name</th>
                    <th>Unidad</th>
                    <th>Especificación</th>
                    <th>Costo</th>
                    <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($precios as $precio)
                        <tr>
                            <td>{{$precio->grupo_precio->name}}</td>
                            <td>{{$precio->name}}</td>
                            <td>{{$precio->unidad}}</td>
                            <td>{{$precio->detalle}}</td>
                            <td>{{$precio->directo}}</td>                            <td width="10px">
                                @can('admin.precios.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.precios.edit', $precio)}}">Editar</a>
                                @endcan
                                </td>
                            <td width="10px">                           
                                @can('admin.precios.destroy')
                                    <form action="{{route('admin.precios.destroy', $precio)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex justify-content-end">
            {{$precios->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existe ningún registro.</strong>
        </div>
    @endif

</div>
