@extends('dashboard.master')
@section('content')
    <div class="form-group">
        {{-- input:text --}}
        <input readonly class="form-control" type="text" name="key" id="key" 
        placeholder="Llave" value="{{ old('key', $rol -> key) }}">
    </div>
    <div class="form-group">
        {{-- input:text --}}
        <input readonly class="form-control" type="text" name="rol" id="rol" 
        placeholder="Nombre del rol" value="{{ old('rol', $rol -> rol) }}">
    </div>
    <div class="form-group">
        <textarea readonly class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Descripción del rol">
            {{ old('description', $rol -> description) }}
        </textarea>
    </div>
    <a class="btn btn-danger" href="{{ URL::previous() }}">Aceptar</a>
@endsection