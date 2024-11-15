@extends('layouts.app') {{-- Usa el layout base --}}
@section('title', 'Mantenimiento - Daga Soluciones Técnicas')

@section('content')
 <!-- Sección de Mantenimiento -->
 <section class="maintenance-section">
        <h1>Mantenimiento</h1>
        <div class="filter-container">
            <div class="filter-box">
                <label>Filtrar por:</label>
                <input type="checkbox"> Puertas<br>
                <input type="checkbox"> Cámaras<br>
                <input type="checkbox"> Sirenas<br>
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
                <img src="path_to_image" alt="Puertas">
                <h2>Puertas</h2>
                <p>Mantenimiento de puerta eléctrica</p>
                <a href="#">Cotizar</a>
            </div>
            <div class="product-card">
                <img src="path_to_image" alt="Cámaras">
                <h2>Cámaras</h2>
                <p>Mantenimiento cámaras de seguridad</p>
                <a href="#">Cotizar</a>
            </div>
            <div class="product-card">
                <img src="path_to_image" alt="Alarmas">
                <h2>Alarmas - Incendios</h2>
                <p>Sistemas contra incendios</p>
                <a href="#">Cotizar</a>
            </div>
            <div class="product-card">
                <img src="path_to_image" alt="Monitores">
                <h2>Monitores</h2>
                <p>Monitores con sistemas de seguridad</p>
                <a href="#">Cotizar</a>
            </div>
            <div class="product-card">
                <img src="path_to_image" alt="Sirenas">
                <h2>Sirenas - Incendios</h2>
                <p>Mantenimiento contra incendios</p>
                <a href="#">Cotizar</a>
            </div>
            <div class="product-card">
                <img src="path_to_image" alt="Porteros">
                <h2>Porteros</h2>
                <p>Mantenimiento de porteros electrónicos</p>
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
