@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Usuarios activos.</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Resumen</h1>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($users as $user)
                    <li class="list-group-item">
                        <h4>{{ $user->name }}</h4>
                        <h6>{{ $user->roles()->pluck('name')->implode(' ') }}</h6>
                        <em>Ultimo Ingreso: {{ $user->updated_at->formatLocalized('%A %d %B %Y') }}</em>
                        <em>Fecha de Ingreso: {{ $user->created_at->diffForHumans() }}</em>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    
@stop
