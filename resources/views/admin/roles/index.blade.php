@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a href="{{route('admin.roles.create')}}" class="btn btn-secondary btn-sm float-right">Nuevo rol</a>
    <h1>Listado de roles para usuario.</h1>
@stop

@section('content')
    @livewire('admin.role-index')
@stop

@section('css')

@stop

@section('js')

@stop
