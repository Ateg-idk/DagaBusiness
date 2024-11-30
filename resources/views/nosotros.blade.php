@extends('layouts.app') {{-- Usa el layout base --}}
@section('title', 'Nosotros - Daga Soluciones Técnicas')

@section('content')
    <section class="about-section">
        <div id="contenido-lector">
        <h1>NOSOTROS</h1>
        <div class="about-content">
            <div class="about-text">
                <p>
                    En DAGA SOLUCIONES TÉCNICAS, nos dedicamos a ofrecer soluciones técnicas integrales en instalación y
                    mantenimiento de sistemas eléctricos.
                    Con años de experiencia en el sector, nuestro equipo altamente capacitado se compromete a brindar un
                    servicio de calidad, seguro y eficiente,
                    adaptado a las necesidades de cada cliente.
                </p>
                <p>
                    Nos enfocamos en garantizar el funcionamiento óptimo de cada instalación, siempre con un enfoque en
                    innovación y cumplimiento de los más altos
                    estándares de seguridad.
                </p>
            </div>
            <div class="about-logo">
                <!-- Llamado a la imagen correctamente -->
                <img src="{{ asset('imagenes/daga2.png') }}" alt="Logo Daga">
            </div>
        </div>
    </div>
    </section>
    <script src="{{ asset('js/lector.js') }}"></script>
@endsection
