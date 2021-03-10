<div class="card">
    <div class="card-header form-inline">
        <div class="col-8">
             <input wire:model="search" type="text" class="w-100 form-control" placeholder="Ingrese un proyecto">
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

    @if ($proyectos->count())
        <div class="card-body">
            <table  class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contratante</th>
                    <th>Ubicación</th>
                    <th>Oferente</th>
                    <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($proyectos as $proyecto)
                        <tr>
                            <td>{{$proyecto->id}}</td>
                            <td>{{$proyecto->name}}</td>
                            <td>{{$proyecto->contratante}}</td>
                            <td>{{$proyecto->ubicacion}}</td>
                            <td>{{$proyecto->oferente}}</td>
                            <td width="10px">
                                @can('admin.proyectos.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.proyectos.edit', $proyecto)}}">Editar</a>
                                @endcan
                                </td>
                            <td width="10px">                           
                                @can('admin.proyectos.destroy')
                                    <form action="{{route('admin.proyectos.destroy', $proyecto)}}" method="POST">
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
            {{$proyectos->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existe ningún registro.</strong>
        </div>
    @endif

</div>
