@csrf
@include('dashboard.structure.validation-error')
<div class="form-group row">
    <label for="key" class="col-md-1 col-form-label text-md-right">{{ __('Clave') }}</label>
    <div class="col-md-10">
        <input id="key" type="text" class="form-control @error('key') is-invalid @enderror" name="key" value="{{ old('key', $rol -> key) }}" required autocomplete="key" autofocus>

        @error('key')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="rol" class="col-md-1 col-form-label text-md-right">{{ __('Rol') }}</label>
    <div class="col-md-10">
        <input id="rol" type="text" class="form-control @error('rol') is-invalid @enderror" name="rol" value="{{ old('rol', $rol -> rol) }}" required autocomplete="rol" autofocus>

        @error('rol')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="description" class="col-md-1 col-form-label text-md-right">{{ __('Funciones') }}</label>

    <div class="col-md-10">
        <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ old('description', $rol -> description) }}</textarea>
        
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="text-md-center">
    <button type="submit" class="btn btn-success">Aceptar</button>
    <a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
</div>


