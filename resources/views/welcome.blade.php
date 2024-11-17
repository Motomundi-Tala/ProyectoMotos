<!-- Uso de la plantilla  -->
@extends('layoutsCAMC.app') 
<link href="{{ asset('css/menu.css') }}" rel="stylesheet"> <!--Llama al estilo hubicado en app/public/css/menu.css -->

@section("title","MotoMundi -Principal-")
<header class="header">
    <h1>MOTOMUNDI</h1>
</header>

<nav class="menu_P">
    <a href={{route("login")}}>Inicio</a> 
 </nav>

@section('contenido')
    <!-- Secciones -->
    <div class="content" id="clientes">
        <h2>Clientes</h2>
        <p>Aquí puedes gestionar la información de nuestros clientes, historial de compras y solicitudes de servicio.</p>
    </div>

    <div class="content" id="prospectos">
        <h2>Prospectos</h2>
        <p>Sección dedicada a los prospectos. Lleva un registro de las personas interesadas en nuestros productos y servicios.</p>
    </div>

    <div class="content" id="taller">
        <h2>Taller</h2>
        <p>Consulta el estado de los servicios y reparaciones de las motos en el taller. Registra el progreso y detalles de cada trabajo.</p>
    </div>

@endsection