@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('admin.permissions.create')}}">Agregar permiso</a>
    <h1>Permisos para rol de usuario.</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success mb-2">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-body">
            <table  class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{$permission->id}}</td>
                        <td>{{$permission->name}}</td>
                        <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.permissions.edit', $permission)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.permissions.destroy', $permission)}}" method="POST">
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
            {{$permissions->links()}}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css"/>
@stop

@section('js')
    <script> console.log("Hi!")</script>
@stop