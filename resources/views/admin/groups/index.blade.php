@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('admin.groups.create')}}">Agregar grupo</a>
    <h1>Grupos de usuario.</h1>
@stop

@section('content')
    @livewire('admin.groups-index')
@stop

@section('css')
    //
@stop

@section('js')
    //
@stop
