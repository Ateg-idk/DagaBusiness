@extends('layouts.app') {{-- Usa el layout base --}}
@section('title', 'Inicio - Daga Soluciones Técnicas')

@section('content')

<section>
    <div class="presentation-container">
        <div class="presentation-logo">
            <img src="path_to_logo" alt="Logo Daga">
        </div>
        <div class="presentation-text">
            <h1>Hola, somos Daga Soluciones Técnicas</h1>
            <p>¿Deseas saber más de nuestros servicios?</p>
            <a href="{{ route('services') }}">Ver servicios</a>
        </div>
    </div>
</section>
<section class="contact-section">
    <h2>Ponte en contacto con nosotros</h2>
    <p>
        Será un placer atenderte y brindarte las mejores soluciones técnicas.
        Ya sea para nuevas instalaciones o mantenimiento, estamos aquí para garantizar que todo funcione perfectamente.
    </p>
    <a href="https://wa.me/your_number">Enviar WhatsApp</a>
    <div class="contact-info">
        <p>📞 998239541 | 99832289</p>
        <p>Horario de atención:</p>
        <p>Lunes a Viernes: 09:00 a.m. – 06:00 p.m.</p>
        <p>Sábado: 09:00 a.m. – 01:00 p.m.</p>
    </div>
</section>
@endsection
