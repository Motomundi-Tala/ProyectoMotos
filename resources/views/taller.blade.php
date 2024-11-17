@extends('layoutsCAMC.app') 

<link href="{{ asset('css/menu.css') }}" rel="stylesheet"> <!--Llama al estilo hubicado en app/public/css/menu.css -->

@section("title","MotoMundi - Taller")

<!-- Encabezado -->
<header class="header">
    <h1>Motomundi - Taller</h1>
</header>

@section('contenido')

<body>
    <div class="content">
        <h2>Registrar Orden de Servicio</h2>
        <div class="form-container">
            <form id="serviceForm">
                <input type="text" id="serviceName" placeholder="Nombre del Cliente" required>
                <input type="text" id="motorcycleModel" placeholder="Modelo de Moto" required>
                <textarea id="serviceDescription" placeholder="Descripción del Servicio" rows="4" required></textarea>
                <button type="submit">Registrar Orden</button>
            </form>
        </div>

        <h2>Órdenes de Servicio</h2>
        <div class="table-container">
            <table id="serviceTable">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Modelo de Moto</th>
                        <th>Descripción del Servicio</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se insertarán las órdenes de servicio -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const serviceForm = document.getElementById('serviceForm');
        const serviceTableBody = document.getElementById('serviceTable').getElementsByTagName('tbody')[0];

        serviceForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const clientName = document.getElementById('serviceName').value;
            const motorcycleModel = document.getElementById('motorcycleModel').value;
            const serviceDescription = document.getElementById('serviceDescription').value;

            const newRow = serviceTableBody.insertRow();
            newRow.insertCell(0).textContent = clientName;
            newRow.insertCell(1).textContent = motorcycleModel;
            newRow.insertCell(2).textContent = serviceDescription;

            // Limpia los campos del formulario después de agregar la orden
            serviceForm.reset();
        });
    </script>
</body>

@endsection
