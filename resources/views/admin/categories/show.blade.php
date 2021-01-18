@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Mostrar detalle de categoría.</h1>
@stop

@section('content')
    <p>Panel de Administración.</p>
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola soy el titulo 1</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi architecto dolore doloribus, ea
                facere, ipsum maiores natus praesentium quisquam rem voluptatibus. Culpa illum ipsa libero quis rerum,
                tempore totam?</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola soy el titulo 2</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi architecto dolore doloribus, ea
                facere, ipsum maiores natus praesentium quisquam rem voluptatibus. Culpa illum ipsa libero quis rerum,
                tempore totam?</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola soy el titulo 3</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi architecto dolore doloribus, ea
                facere, ipsum maiores natus praesentium quisquam rem voluptatibus. Culpa illum ipsa libero quis rerum,
                tempore totam?</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola soy el titulo 4</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi architecto dolore doloribus, ea
                facere, ipsum maiores natus praesentium quisquam rem voluptatibus. Culpa illum ipsa libero quis rerum,
                tempore totam?</p>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css"/>
@stop

@section('js')
    <script>
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        )
    </script>
@stop
