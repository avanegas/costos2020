@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Crear nuevo post.</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('admin.posts.store') }}">
                @csrf
                <input id="user_id" type="hidden"  name="user_id" value="{{auth()->user()->id}}">
                <div class="form-group">
                    <label for="name">{{ __('Nombre') }}</label>
                    <div class="col-md">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder='Ingrese el nombre del post' name="name" value="{{ old('name') }}" autocomplete=off autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="slug">{{ __('Slug') }}</label>
                    <div class="col-md">
                        <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror"  placeholder='Ingrese el slug del post'name="slug" readonly>
                        @error('slug')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="category_id">{{ __('Categoría') }}</label>
                    <div class="col-md">
                        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                            <option value="">Escoja la categoría del post</option>
                            @foreach ( $categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <p class="font-weight-bold @error('tags') is-invalid @enderror"> Etiquetas</p>
                    @foreach ($tags as $tag)
                        <label class="mr-2">
                            <input class="mr-1" name="tags[]" id="tags" type="checkbox" value="{{$tag->id}}">{{ $tag->name}}
                        </label>
                    @endforeach
                    @error('tags')
                        <br>
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0 font-weight-bold @error('status') is-invalid @enderror">Estado del post</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status" value="DRAFT" checked>
                                <label class="form-check-label font-weight-bold" for="DRAFT">
                                    Borrador
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status" value="PUBLISHED">
                                <label class="form-check-label font-weight-bold" for="PUBLISHED">
                                    Publicado
                                </label>
                            </div>
                        </div>
                    </div>
                    @error('status')
                        <br>
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </fieldset>

                <div class="form-group">
                    <label for="excerpt">{{ __('Extracto') }}</label>
                    <div class="col-md">
                        <textarea class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" rows="4"></textarea>
                        @error('excerpt')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>


                <div class="form-group">
                    <label for="body">{{ __('Cuerpo del post') }}</label>
                    <div class="col-md">
                        <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="4"></textarea>
                        @error('body')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>


                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-sm">
                        {{ __('Guardar') }}
                    </button>
                    <a href="{{route('admin.posts.index')}}" class="btn btn-secondary btn-sm ml-1"> Regresar</a>
                </div>

            </form>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

    <script type="text/javascript" >
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
            .create( document.querySelector( '#excerpt' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
