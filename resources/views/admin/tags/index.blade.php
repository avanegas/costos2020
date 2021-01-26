@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a href="{{route('admin.tags.create')}}" class="btn btn-secondary btn-sm float-right">Nueva etiqueta</a>
    <h1>Listado de etiquetas para artículo.</h1>
@stop

@section('content')
    @livewire('admin.tags-index')
@stop

@section('css')
    
@stop

@section('js')
    
@stop