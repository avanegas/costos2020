@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a href="{{route('admin.posts.create')}}" class="btn btn-secondary btn-sm float-right">Nuevo artículo</a>
    <h1>Listado de articulos.</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    
@stop

@section('js')
   
@stop