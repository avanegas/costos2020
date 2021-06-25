<div class="form-group">
    <label for="grupo_equipo_id">{{ __('Grupo') }}</label>
    <div class="col-md">
        <select name="grupo_equipo_id" id="grupo_equipo_id" class="form-control @error('grupo_equipo_id') is-invalid @enderror">
            <option value="">Ingrese el grupo</option>
            @foreach ( $grupo_equipos as $grupo_equipo)
                <option value="{{ $grupo_equipo->id }}" @isset($equipo->grupo_equipo_id) @if($equipo->grupo_equipo_id === $grupo_equipo->id) selected @endif @endisset>{{ $grupo_equipo->name }}</option>
            @endforeach
        </select>
        @error('grupo_equipo_id')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label for="name">{{ __('Equipo') }}</label>
    <div class="col-md">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder='Ingrese el nomgre del equipo' name="name" value="{{ isset($equipo->name)?$equipo->name:old('name') }}" autocomplete=off autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label for="marca">{{ __('Marca') }}</label>
    <div class="col-md">
        <input id="marca" type="text" class="form-control @error('marca') is-invalid @enderror"  placeholder='Ingrese la marca del equipo'name="marca" value="{{ isset($equipo->marca)?$equipo->marca:old('marca') }}">
        @error('marca')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label for="tipo">{{ __('Tipo') }}</label>
    <div class="col-md">
        <input id="tipo" type="text" class="form-control @error('tipo') is-invalid @enderror" placeholder='Ingrese el tipo' name="tipo" value="{{ isset($equipo->tipo)?$equipo->tipo:old('tipo') }}">
        @error('tipo')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label for="tarifa">{{ __('Tarifa') }}</label>
    <div class="col-md">
        <input id="tarifa" type="text" class="form-control @error('tarifa') is-invalid @enderror" placeholder='Ingrese la tarifa' name="tarifa" value="{{ isset($oferta->tarifa)?$oferta->tarifa:old('tarifa') }}">
        @error('tarifa')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>

<fieldset class="form-group">
    <div class="row">
        <legend class="col-form-label col-sm-2 pt-0 font-weight-bold @error('status') is-invalid @enderror">Estado de la oferta</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status" value="DRAFT" @isset($oferta->status) {{ $oferta->status == "DRAFT" ? 'checked' : '' }} @endisset checked>
                <label class="form-check-label font-weight-bold" for="DRAFT">
                    Borrador
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status" value="PUBLISHED" @isset($oferta->status) {{ $oferta->status == "PUBLISHED" ? 'checked' : '' }} @endisset>
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

<div class="mb-3 row">
    <div class="col">
        <div class="image-wrapper">
            @isset ($oferta->image)
                <img id="picture" src="{{Storage::url($oferta->image->url)}}">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2020/02/06/20/01/university-library-4825366_960_720.jpg">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="file">Imagen que se mostrara.</label>
            <input type="file" name="file" id="file" accept="image/*" class="form-control-file @error('file') is-invalid @enderror">
            @error('file')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror

        </div>
        <small>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis dolore officiis architecto laboriosam consequuntur vel et dolorum quidem odit deleniti numquam laudantium magnam, debitis inventore quod! Animi maxime dolor sit!</small>
    </div>
</div>

<div class="form-group">
    <label for="descripcion">{{ __('Descripción') }}</label>
    <div class="col-md">
        <textarea class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" rows="4">{{ isset($oferta->descripcion)?$oferta->descripcion:old('descripcion') }}</textarea>
        @error('descripcion')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>
