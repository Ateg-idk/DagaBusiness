@extends('layouts.app') {{-- Usa el layout base --}}
@section('title', 'Servicios - Daga Soluciones Técnicas')

@section('content')
    <section class="services-section">
        <h1>Servicios</h1>
        <div class="services-container">
            <div class="service-card">
                <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png" alt="Instalar"
                    style="width: 50px; height: 50px;">
                <h2>INSTALACIÓN</h2>
                <p>
                    Realizamos la instalación completa de sistemas eléctricos, asegurándonos de que cumplan con las
                    normativas de seguridad
                    y calidad, adaptándonos a las necesidades específicas de cada proyecto.
                </p>
                <a href="{{ route('instalaciones') }}">Más información</a>
            </div>

            <div class="service-card">
                <img src="https://cdn-icons-png.flaticon.com/512/5075/5075827.png" alt="Icono Mantenimiento"
                    class="service-icon"> {{-- Ícono de mantenimiento --}}
                <h2>MANTENIMIENTO</h2>
                <p>
                    Ofrecemos mantenimiento preventivo y correctivo para garantizar el óptimo funcionamiento de tus sistemas
                    eléctricos,
                    con un equipo altamente capacitado.
                </p>
                <a href="{{ route('mantenimiento') }}">Más información</a>
            </div>
        </div>
    </section>
@endsection
