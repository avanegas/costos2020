@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a href="{{route('admin.permissions.create')}}" class="btn btn-secondary btn-sm float-right">Nuevo permiso</a>
    <h1>Listado de permisos para un rol de usuario.</h1>
@stop

@section('content')
    @livewire('admin.permission-index')
@stop

@section('css')
    
@stop

@section('js')
    
@stop