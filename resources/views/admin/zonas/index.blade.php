@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('admin.zonas.create')}}">Agregar zona</a>
    <h1>Area(zona) de trabajo.</h1>
@stop

@section('content')
    @livewire('admin.zonas-index')
@stop

@section('css')
    //
@stop

@section('js')
    //
@stop
