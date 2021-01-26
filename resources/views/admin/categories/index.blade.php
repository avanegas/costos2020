@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a href="{{route('admin.categories.create')}}" class="btn btn-secondary btn-sm float-right">Nueva categoría</a>
    <h1>Listado categorias para artículos.</h1>
@stop

@section('content')
    @livewire('admin.categories-index')
@stop

@section('css')
    
@stop

@section('js')
    
@stop