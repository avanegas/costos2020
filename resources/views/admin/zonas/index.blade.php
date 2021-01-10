@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('admin.zonas.create')}}">Agregar zona</a>
    <h1>Zonas de usuario.</h1>
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
                    <th>User</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($zonas as $zona)
                    <tr>
                        <td>{{$zona->id}}</td>
                        <td>{{$zona->user->name}}</td>
                        <td>{{$zona->name}}</td>
                        <td>{{$zona->description}}</td>
                        <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.zonas.edit', $zona)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.zonas.destroy', $zona)}}" method="POST">
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
            {{$zonas->links()}}
        </div>
    </div>
@stop
