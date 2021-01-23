@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a href="{{route('admin.users.create')}}" class="btn btn-secondary btn-sm float-right">Nuevo usuario</a>
    <h1>Lista de usuarios.</h1>
@stop

@section('content')
    @livewire('admin.users-index')  
@stop

@section('css')
  //
@stop

@section('js')
  //
@stop