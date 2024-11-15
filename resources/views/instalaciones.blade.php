@extends('layouts.app') {{-- Usa el layout base --}}
@section('title', 'Instalaciones - Daga Soluciones Técnicas')

@section('content')

<!-- Contenedor principal con dos columnas: Filtros y Productos -->
<div class="container">
    <div class="row">
        <!-- Columna de filtros (Sidebar) -->
        <div class="col-md-3">
            <div class="filter-container" style=" margin-top: 60px;">
                <div class="filter-box">
                    <h3>Filtrar por:</h3>
                    <input type="checkbox"> Intercomunicadores<br>
                    <input type="checkbox"> Cámaras<br>
                    <input type="checkbox"> Controles<br>
                    <input type="checkbox"> Componentes extras<br>
                    <button class="btn btn-primary">Aplicar</button>
                </div>
            </div>
        </div>

        <!-- Columna de productos -->
        <div class="col-md-9">
            <section class="installations-section">
                <h1>Instalaciones</h1>
                
                <!-- Filtro de ordenación -->
                <div>
                    <label>Ordenar por:</label>
                    <select>
                        <option>Relevancia</option>
                        <option>Precio</option>
                        <option>Popularidad</option>
                    </select>
                </div>
                <br/>
                <!-- Productos en 4 columnas -->
                <div class="container">
                    <div class="row">
                        @foreach($productos as $producto)
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <!-- Mostrar la imagen del producto -->
                                    <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre }}" class="img-fluid">
                                    <h2>{{ $producto->nombre }}</h2>
                                    <p>{{ $producto->descripcion }}</p>
                                    
                                    <a href="#quote-form" class="btn btn-primary quote-button" >Cotizar</a>
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

    <form action="{{ route('instalaciones.store') }}" method="POST" class="contact-form">
        @csrf
        <div class="form-row">
            <!-- Nombres -->
            <div class="form-group col-md-6 col-sm-3 mb-2">
                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" name="nombres" placeholder="Nombres" class="form-control"
                    pattern="[A-Za-záéíóúÁÉÍÓÚÑñ\s]+" title="Solo se permiten letras" required>
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
                <option value="Cámaras">Instalación de cámaras</option>
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
        <br/>
        <div class="text-center">
            <button type="submit" class="btn btn-warning">Solicitar Información</button>
        </div>
    </form>
</section>

@if(session('success'))
<script>
alert('Consulta enviada correctamente');
</script>
@endif

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
