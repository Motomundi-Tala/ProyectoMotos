<!-- Estructura HTML -->
<link href="{{ asset('css/menu.css') }}" rel="stylesheet"> <!--Llama al estilo hubicado en app/public/css/menu.css -->

<img src="{{ asset('imagenes/logo.png') }}" alt="Logo" class="logo"> <!-- Logo en la parte superior derecha -->

<nav class="menu_P">
    <a href="{{route('welcome')}}">Inicio</a> 
    <a href={{route("clientes")}}>Clientes</a>
    <a href={{route("prospectos")}}>Prospectos</a>
    <a href={{route("taller")}}>Mi Taller</a>
    <a href={{route("cartafactura")}}>Carta Factura</a>
    <a href={{route("vehiculos")}}>Vehículos</a>
    <a href={{route("G_Menus")}}>G_MenusControlle</a>
</nav>
