
@extends('layoutsCAMC.app') 

<link href="{{ asset('css/menu.css') }}" rel="stylesheet">

@section("title","MotoMundi -Vehiculo-")

<!-- Encabezado -->
<header class="header">
<h1>Motomundi - Vehiculo</h1>
</header>

@section('contenido')

<body>
    <div class="content">
        <h2>Agregar nuevo vehículo</h2>

        <div class="form-container">
            <form id="vehicleForm" action="{{route("vehiculos.store")}}" method="POST">
                @csrf

                <input type="text" id="motor" name="Motor_T_Vehiculo" placeholder="Motor" required>
                <input type="text" id="serie" name="Serie_T_Vehiculo" placeholder="Serie" required>
                <input type="text" id="marca" name="Marca_T_Vehiculo" placeholder="Marca" required>
                <input type="text" id="modelo" name="Modelo_T_Vehiculo" placeholder="Modelo" required>
                <input type="text" id="color" name="Color_T_Vehiculo" placeholder="Color" required>
                <input type="date" id="fecha_venta" name="F_Venta_T_Vehiculo" placeholder="Fecha de Venta" required>
                <input type="number" id="kilometraje" name="Kilometraje_T_Vehiculo" placeholder="Kilometraje" required>
                <button type="submit">Agregar Vehículo</button>
            </form>
        </div>

        <h2>Lista de Vehículos</h2>
        <table id="vehicleTable">
            <thead>
                <tr>
                    <th>Motor</th>
                    <th>Serie</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Fecha de Venta</th>
                    <th>Kilometraje</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se insertarán los vehículos registrados -->
            </tbody>
        </table>
    </div>


    @if(\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@elseif(\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@elseif(\Session::has('warning'))
    <div class="alert alert-warning">
        <ul>
            <li>{!! \Session::get('warning') !!}</li>
        </ul>
    </div>
@endif

@endsection

