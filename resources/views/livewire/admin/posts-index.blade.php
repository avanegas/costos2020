<div class="card">
    <div class="card-header form-inline">
        <div class="col-8">
             <input wire:model="search" type="text" class="w-100 form-control" placeholder="Ingrese un post">
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

    @if ($posts->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título del artículo</th>
                        <th>Creado</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->name}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                            </td>
                            <td with="10px">
                                <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
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
            {{$posts->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No existe ningún registro.</strong>
        </div>
    @endif

</div>
