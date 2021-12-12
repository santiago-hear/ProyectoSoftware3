@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @auth
                        Bienvenido {{ auth()->user()->name }}
                        <br>
                        Esta conectado como {{ auth()->user()->rol->rol }}
                    @endauth

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('Images/image1.png') }}" class="card-img-top" alt="imagen 1">
                                <div class="card-body">
                                <a href="{{ route('category.index') }}"><h5 class="card-title">Módulo categorías</h5></a>
                                    <p class="card-text">Aquí se pueden registar categorías</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('Images/image4.png') }}" class="card-img-top" alt="imagen 2">
                                <div class="card-body">
                                    <a href="{{ route('post.index') }}"><h5 class="card-title">Módulo publicaciones</h5></a>
                                    <p class="card-text">Aquí se pueden registrar publicaciones</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('Images/image3.png') }}" class="card-img-top" alt="imagen 3">
                                <div class="card-body">
                                <a href="{{ route('rol.index') }}"><h5 class="card-title">Módulo roles</h5></a>
                                    <p class="card-text">Aquí se pueden adminsitrar los roles</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
