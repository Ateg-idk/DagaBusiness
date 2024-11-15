@extends('layouts.app') {{-- Usa el layout base --}}
@section('title', 'Instalaciones - Daga Soluciones Técnicas')

@section('content')
    <!-- Sección de Instalaciones -->
    <section class="installations-section">
        <h1>Instalaciones</h1>
        <div class="filter-container">
            <div class="filter-box">
                <label>Filtrar por:</label>
                <input type="checkbox"> Intercomunicadores<br>
                <input type="checkbox"> Cámaras<br>
                <input type="checkbox"> Controles<br>
                <input type="checkbox"> Componentes extras<br>
                <button>Aplicar</button>
            </div>
            <div>
                <label>Ordenar por:</label>
                <select>
                    <option>Relevancia</option>
                    <option>Precio</option>
                    <option>Popularidad</option>
                </select>
            </div>
        </div>
        <div class="products-container">
            <div class="product-card">
                <img src="path_to_image" alt="Producto 1">
                <h2>bticino</h2>
                <p>Intercomunicador marca bticino</p>
                <a href="#">Cotizar</a>
            </div>
            <div class="product-card">
                <img src="path_to_image" alt="Producto 2">
                <h2>Intec</h2>
                <p>Intercomunicador marca Intec</p>
                <a href="#">Cotizar</a>
            </div>
            <div class="product-card">
                <img src="path_to_image" alt="Producto 3">
                <h2>Generica</h2>
                <p>Intercomunicador marca Generica</p>
                <p class="price">S/ 89.90</p>
                <a href="#">Cotizar</a>
            </div>
            <div class="product-card">
                <img src="path_to_image" alt="Producto 4">
                <h2>Khas</h2>
                <p>Intercomunicador marca Khas</p>
                <a href="#">Cotizar</a>
            </div>
        </div>
    </section>

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
