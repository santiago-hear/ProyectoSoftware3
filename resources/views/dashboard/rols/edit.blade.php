@extends('dashboard.master')
@section('content')
    <h6>Editar rol</h6>
    <form action="{{ route('rol.update', $rol -> id) }}" method="POST">
        @method('PUT')
        @include('dashboard.rols._form')
    </form>
@endsection