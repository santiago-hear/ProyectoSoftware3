@extends('dashboard.master')
@section('content')
    <div class="form-group">
        {{-- input:text --}}
        <input readonly class="form-control" type="text" name="category_name" id="category_name" 
        placeholder="Nombre de la categoría" value="{{ old('category_name', $category -> category_name) }}">
    </div>
    <div class="form-group">
        <textarea readonly class="form-control" name="category_description" id="category_description" cols="30" rows="10">
            {{ old('category_description', $category -> category_description) }}
        </textarea>
    </div>
    <a class="btn btn-danger" href="{{ URL::previous() }}">Aceptar</a>
@endsection