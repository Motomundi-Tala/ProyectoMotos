
<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
@extends('layoutsCAMC.app') 

@section("title","MotoMundi -Clientes-")

<header class="header">
    <h1>Motomundi - Clientes</h1>
</header>


<body>
 
    @section('contenido') 

    <div class="content">
        <h2>Agregar Cliente</h2>
        <div class="form-container">
            <form id="clientForm">
                <input type="text" id="clientName" name="clientName" placeholder="Nombre completo" required>
                <input type="email" id="clientEmail" name="clientEmail" placeholder="Correo electrónico" required>
                <input type="tel" id="clientPhone" name="clientPhone" placeholder="Teléfono" required>
                <button type="submit">Agregar Cliente</button>
            </form>
        </div>

        <h2>Lista de Clientes</h2>
        <div class="table-container">
            <table id="clientTable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se insertarán los clientes registrados -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const clientForm = document.getElementById('clientForm');
        const clientTableBody = document.getElementById('clientTable').getElementsByTagName('tbody')[0];

        clientForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('clientName').value;
            const email = document.getElementById('clientEmail').value;
            const phone = document.getElementById('clientPhone').value;

            const newRow = clientTableBody.insertRow();
            newRow.insertCell(0).textContent = name;
            newRow.insertCell(1).textContent = email;
            newRow.insertCell(2).textContent = phone;

            clientForm.reset();
        });
    </script>

@endsection