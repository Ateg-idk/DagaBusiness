@extends('layouts.app') {{-- Usa el layout base --}}
@section('title', 'Inicio - Daga Soluciones Técnicas')

@section('content')
    <!-- Separador visual entre el navbar y la sección principal -->
    <div class="divider"></div>

    <!-- Sección de presentación -->
    <section class="presentation-section">
        <div class="presentation-container">
            <div class="presentation-logo">
                <img src="{{ asset('imagenes/daga2.png') }}" alt="Logo Daga">
            </div>
            <div class="presentation-text">
                <h1>Hola, somos Daga Soluciones Técnicas</h1>
                <p>¿Deseas saber más de nuestros servicios?</p>
                <a href="{{ route('services') }}" class="btn">
                    Ver servicios
                    <img src="https://cdn-icons-png.flaticon.com/512/622/622669.png" alt="Lupa">
                </a>
            </div>
        </div>
    </section>


    <!-- Separador visual -->
    <div class="divider"></div>

    <!-- Sección de contacto -->
    <section class="contact-section">
        <h2>Ponte en contacto con nosotros</h2>
        <p>
            Será un placer atenderte y brindarte las mejores soluciones técnicas.
            Ya sea para nuevas instalaciones o mantenimiento, estamos aquí para garantizar que todo funcione perfectamente.
        </p>
        <a href="https://wa.me/your_number" class="btn btn-whatsapp">Enviar WhatsApp</a>
        <div class="contact-info">
            <p>📞 998239541 | 99832289</p>
            <p>Horario de atención:</p>
            <p>Lunes a Viernes: 09:00 a.m. – 06:00 p.m.</p>
            <p>Sábado: 09:00 a.m. – 01:00 p.m.</p>
        </div>
    </section>

    <!-- Separador visual -->
    <div class="divider"></div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <!-- Columna 1: Nosotros -->
            <div class="footer-column">
                <h3>Nosotros</h3>
                <ul>
                    <li><a href="#">Conócenos</a></li>
                    <li><a href="#">Servicios Corporativos</a></li>
                    <li><a href="#">Informe de Gestión 2023</a></li>
                </ul>
            </div>
            <!-- Columna 2: Atención al cliente -->
            <div class="footer-column">
                <h3>Atención al cliente</h3>
                <ul>
                    <li><a href="#">Ver más facturas electrónicas</a></li>
                    <li><a href="#">Lista de servicios permitidos</a></li>
                    <li><a href="#">Atención de consultas e incidencias por Contáctanos</a></li>
                </ul>
            </div>
            <!-- Columna 3: Políticas -->
            <div class="footer-column">
                <h3>Políticas</h3>
                <ul>
                    <li><a href="#">Política de Seguridad y Salud en el Trabajo (SST)</a></li>
                    <li><a href="#">Política de Sostenibilidad</a></li>
                    <li><a href="#">Política de Diversidad e Inclusión</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                </ul>
            </div>
    </footer>
@endsection
