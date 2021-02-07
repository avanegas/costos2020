@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a href="{{route('admin.categories.create')}}" class="btn btn-secondary btn-sm float-right">Nueva categoría</a>
    <h1>Listado categorias para artículos.</h1>
@stop

@section('content')
    
    @if (session('info'))
        <div class="alert alert-success mb-2">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @livewire('admin.categories-index')
@stop

@section('css')
    
@stop

@section('js')
    
@stop