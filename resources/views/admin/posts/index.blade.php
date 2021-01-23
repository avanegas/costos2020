@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <a href="{{route('admin.posts.create')}}" class="btn btn-secondary btn-sm float-right">Nuevo post</a>
    <h1>Listado de Post.</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    //
@stop

@section('js')
    //
@stop