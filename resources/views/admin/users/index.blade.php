@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1 class="px-2">Lista de usuarios.</h1>
@stop

@section('content')
    @livewire('admin.users-index')  
@stop

@section('css')

@stop

@section('js')

@stop