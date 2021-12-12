@extends('dashboard.master')
@section('content')
    <h5>Crear rol</h5>
    <form action="{{ route('rol.store') }}" method="POST">
        @include('dashboard.rols._form')
    </form>
@endsection