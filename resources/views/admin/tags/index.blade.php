@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('admin.tags.create')}}">Agregar etiqueta</a>
    <h1>Etiquetas de artículo.</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success mb-2">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                         <tr>
                             <td>{{$tag->id}}</td>
                             <td>{{$tag->name}}</td>
                             <td width="10px">
                                 <a href="{{route('admin.tags.edit', $tag)}}" class="btn btn-sm btn-primary">Edit</a>
                             </td>
                             <td width="10px">
                                 <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                     @csrf
                                     @method('delete')
                                     <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                 </form>
                             </td>
                         </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$tags->links()}}
        </div>
    </div>
@stop
