@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Editar permisos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success mb-2">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.permissions.update', $permission) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <div class="col-md">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $permission->name }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">{{ __('Descripción') }}</label>
                    <div class="col-md">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  value="{{ $permission->description }}">
                        @error('description')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
    
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-sm">
                        {{ __('Actualizar') }}
                    </button>
                    <a href="{{route('admin.permissions.index')}}" class="btn btn-secondary btn-sm ml-1"> {{ __('Regresar')}}</a>
                </div>
            </form>
        </div>
    </div>
@stop