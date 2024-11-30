@extends('layouts.app')
@section('title', $producto->nombre)

@section('content')
<div class="container mt-5">

    <div class="row">
        <!-- Imagen del producto -->
        <div class="col-md-6">
            <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre }}" class="img-fluid">
        </div>

        <!-- Detalles del producto -->
        <div class="col-md-6">
            <h1 class="product-name">{{ $producto->nombre }}</h1>
            
            <p class="product-description">{{ $producto->descripcion }}</p>
            <hr>

            <p class="product-category">Categoría: {{ $producto->filtro }}</p>

            <hr>

            <!-- Servicios adicionales -->
            <ul class="product-services">
                <p><i class="fas fa-lock"></i> Productos de Calidad</p>
                
                <p><i class="fas fa-headset"></i> Soporte Especializado</p>
            </ul>

            <!-- Botón para cotizar -->
            <a href="{{ route('instalaciones') }}#quote-form" class="btn btn-warning btn-lg">Cotizar este producto</a>


        </div>

    </div>

    <!-- Información adicional 
    <div class="row mt-5">
        <div class="col-12">
            <h3>Detalles adicionales</h3>
            <p>{{ $producto->detalles }}</p>
        </div>
    </div>-->
</div>
@endsection