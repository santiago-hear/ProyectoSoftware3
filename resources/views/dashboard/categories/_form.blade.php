{{-- Falsificación de peticiones en sitios cruzados --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    {{-- input:text --}}
    <input class="form-control" type="text" name="category_name" id="category_name" 
    placeholder="Nombre de la categoria" value="{{ old('category_name', $category -> category_name) }}">
</div>
<div class="form-group">
    <textarea class="form-control" name="category_description" id="category_description" cols="30" rows="10" placeholder="Descripción de la categoria">
        {{ old('category_description', $category -> category_description) }}
    </textarea>
</div>
<button type="submit" class="btn btn-success">Aceptar</button>
<a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>

