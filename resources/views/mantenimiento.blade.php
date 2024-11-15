@extends('layouts.app') {{-- Usa el layout base --}}
@section('title', 'Mantenimiento - Daga Soluciones Técnicas')

@section('content')
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
</section>
@endsection
