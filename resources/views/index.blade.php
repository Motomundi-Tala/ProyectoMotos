<?public_path()@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Vehículos</h2>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('vehiculos.create') }}" class="btn btn-primary mb-3">Crear Vehículo</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Motor</th>
                    <th>Serie</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Fecha de Venta</th>
                    <th>Vehículo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehiculos as $vehiculo)
                    <tr>
                        <td>{{ $vehiculo->Motor_T_Vehiculo }}</td>
                        <td>{{ $vehiculo->Serie_T_Vehiculo }}</td>
                        <td>{{ $vehiculo->Marca_T_Vehiculo }}</td>
                        <td>{{ $vehiculo->Modelo_T_Vehiculo }}</td>
                        <td>{{ $vehiculo->Color_T_Vehiculo }}</td>
                        <td>{{ $vehiculo->F_Venta_T_Vehiculo }}</td>
                        <td>{{ $vehiculo->Vehiculo_T_Vehiculo }}</td>
                        <td>
                            <a href="{{ route('vehiculos.edit', $vehiculo->ID_T_Vehiculo) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('vehiculos.destroy', $vehiculo->ID_T_Vehiculo) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
