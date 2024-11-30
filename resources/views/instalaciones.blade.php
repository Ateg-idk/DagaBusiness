@extends('layouts.app') {{-- Usa el layout base --}}
@section('title', 'Instalaciones - Daga Soluciones Técnicas')

@section('content')

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QCM8ZG3KLP"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-QCM8ZG3KLP');
</script>

<!-- Contenedor principal con dos columnas: Filtros y Productos -->
<div class="container">
    <div class="row">
        <!-- Columna de filtros (Sidebar) -->
        <div class="col-md-3">
            <div class="filter-container" style="margin-top: 60px;">
                <div class="filter-box">
                    <h3>Filtrar por:</h3>
                    <form action="{{ route('instalaciones.filter') }}" method="POST">
                        @csrf
                        <label>
                            <input type="checkbox" name="categorias[]" value="Intercomunicadores"> Intercomunicadores
                        </label><br>
                        <label>
                            <input type="checkbox" name="categorias[]" value="Cámaras"> Cámaras
                        </label><br>
                        <label>
                            <input type="checkbox" name="categorias[]" value="Controles"> Controles
                        </label><br>
                        <label>
                            <input type="checkbox" name="categorias[]" value="Componentes extras"> Componentes extras
                        </label><br>
                        <button type="submit" class="btn btn-primary">Aplicar</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Columna de productos -->
        <div class="col-md-9">
            <section class="installations-section">
                <h1>Instalaciones</h1>
                <br />
                <!-- Productos en 4 columnas -->
                <div class="container">
                    <div class="row">
                        @foreach($productos as $producto)
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="product-card">
                                <!-- Mostrar la imagen del producto -->
                                <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre }}"
                                    class="img-fluid">
                                <h2>{{ $producto->nombre }}</h2>
                                

                                <a href="#quote-form" class="btn btn-primary quote-button">Cotizar</a>

                                <a href="{{ route('instalaciones.producto.show', $producto->id) }}"
                                    class="btn btn-info">
                                    Ver detalles
                                </a>


                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Formulario de Contacto -->
<section id="quote-form" class="contact-form-section container" style="max-width: 600px; margin: auto; padding: 20px;">
    <h2 class="text-center">¿Tienes alguna consulta o necesitas más información?</h2>

    <form id="contactForm" action="{{ route('instalaciones.store') }}" method="POST" class="contact-form">
        @csrf
        <div class="form-row">
            <!-- Nombres -->
            <div class="form-group col-md-6 col-sm-3 mb-2">
                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" name="nombres" placeholder="Nombres" class="form-control"
                    pattern="[A-Za-záéíóúÁÉÍÓÚÑñ\s]+" title="Solo se permiten letras" required
                    onfocus="gtag('event', 'Formulario Interactuado', {'event_category': 'Formulario', 'event_label': 'Formulario de Instalaciones'})">
            </div>
            <!-- Apellidos -->
            <div class="form-group col-md-6 col-sm-3 mb-2">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" class="form-control"
                    pattern="[A-Za-záéíóúÁÉÍÓÚÑñ\s]+" title="Solo se permiten letras" required>
            </div>
        </div>

        <div class="form-row">
            <!-- Email -->
            <div class="form-group col-md-6">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
            </div>

            <!-- Teléfono -->
            <div class="form-group col-md-6">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" class="form-control"
                    pattern="\d{9}" title="El teléfono debe tener 9 cifras" required maxlength="9"
                    oninput="this.value = this.value.replace(/[^\d]/g, '').slice(0, 9)">
            </div>
        </div>

        <div class="form-group">
            <label for="servicio">Servicio:</label>
            <select id="servicio" name="servicio" class="form-control" required>
                <option value="Seleccione una Opción">Seleccione una Opción</option>
                <option value="Instalación de cámaras">Instalación de cámaras</option>
                <option value="Controles">Controles</option>
                <option value="Componentes Extras">Componentes Extras</option>
                <option value="Intercomunicadores">Intercomunicadores</option>
            </select>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="4" placeholder="Describe tu necesidad en seguridad aquí"
                class="form-control" required></textarea>
        </div>
        <br />
        <div class="text-center">
            <button type="submit" class="btn btn-warning"
                onclick="gtag('event', 'Formulario Completado', {'event_category': 'Formulario', 'event_label': 'Formulario de Instalaciones'})">
                Solicitar Información
            </button>
        </div>
    </form>
</section>

@if(session('success'))
<script>
alert('Consulta enviada correctamente');
</script>
@endif

<script>
window.addEventListener('beforeunload', function() {
    const form = document.querySelector('#contactForm');
    if (form) {
        const formFields = Array.from(form.elements).some(field => field.value.trim() !== '');
        if (formFields) {
            gtag('event', 'Formulario Abandonado', {
                'event_category': 'Formulario',
                'event_label': 'Formulario de Instalaciones'
            });
        }
    }
});
</script>
<script>
let formStartTime = null;

// Inicia el temporizador cuando el usuario comienza a interactuar con el formulario
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#contactForm');
    if (form) {
        form.addEventListener('focusin', () => {
            if (!formStartTime) {
                formStartTime = new Date();
                console.log('Formulario iniciado: ' + formStartTime);
            }
        });

        // Envía el tiempo transcurrido cuando el formulario se envía
        form.addEventListener('submit', (event) => {
            if (formStartTime) {
                const formEndTime = new Date();
                const timeTaken = Math.round((formEndTime - formStartTime) /
                1000); // Tiempo en segundos

                // Verifica que el tiempo esté correcto antes de enviarlo
                console.log('Tiempo tomado: ' + timeTaken + ' segundos');

                // Enviar evento a Google Analytics
                gtag('event', 'Formulario Enviado', {
                    'event_category': 'Formulario',
                    'event_label': 'Formulario de Instalaciones',
                    'value': timeTaken, // Tiempo en segundos
                    'non_interaction': false
                });
            }
        });
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQ9kXc+jFj7I+vL4f64A9zzxsb5c5yWA5NQnLbzzDfjmpLl1vw6Oe4cFc5S3rm33" crossorigin="anonymous">
</script>

<!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-column">
            <h3>Nosotros</h3>
            <ul>
                <li><a href="#">Conócenos</a></li>
                <li><a href="#">Servicios Corporativos</a></li>
                <li><a href="#">Informe de Gestión 2023</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Atención al cliente</h3>
            <ul>
                <li><a href="#">Ver mis facturas electrónicas</a></li>
                <li><a href="#">Lista de servicios permitidos</a></li>
                <li><a href="#">Atención de consultas</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Políticas</h3>
            <ul>
                <li><a href="#">Política de Seguridad</a></li>
                <li><a href="#">Política de Sostenibilidad</a></li>
                <li><a href="#">Términos y condiciones</a></li>
            </ul>
        </div>
    </div>
    <p>DAGA Soluciones Técnicas copyright 2024</p>
</footer>

@endsection