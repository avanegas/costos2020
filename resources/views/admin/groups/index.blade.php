@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('admin.groups.create')}}">Agregar grupo</a>
    <h1>Grupos de usuario.</h1>
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
                @foreach ($groups as $group)
                    <tr>
                        <td>{{$group->id}}</td>
                        <td>{{$group->name}}</td>
                        <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.groups.edit', $group)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.groups.destroy', $group)}}" method="POST">
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
            {{$groups->links()}}
        </div>
    </div>
@stop
