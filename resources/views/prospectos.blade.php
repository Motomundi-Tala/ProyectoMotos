</head>

@extends('layoutsCAMC.app') 

@section("title","MotoMundi -Prospectos-")

 <!-- Encabezado -->
 <header class="header">
    <h1>Motomundi - Prospectos</h1>
</header>

@section('contenido')

<body>
   

    <!-- Contenido principal -->
    <div class="content">
        <h2>Agregar nuevo prospecto</h2>

        <!-- Formulario para agregar prospecto -->
        <div class="form-container">
            <form id="prospectForm">
                <input type="text" id="name" name="name" placeholder="Nombre completo" required>
                <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
                <input type="tel" id="phone" name="phone" placeholder="Teléfono" required>
                <button type="submit">Agregar Prospecto</button>
            </form>
        </div>

        <!-- Tabla de prospectos -->
        <h2>Lista de Prospectos</h2>
        <table id="prospectTable">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                </tr>
            </thead>




            <tbody>
                <!-- Aquí se insertarán los prospectos registrados -->
            </tbody>
        </table>
    </div>

    <!-- Script para manejo del formulario -->
    <script>
        // Captura el formulario y la tabla
        const form = document.getElementById('prospectForm');
        const tableBody = document.getElementById('prospectTable').getElementsByTagName('tbody')[0];

        // Evento para agregar un nuevo prospecto
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío del formulario

            // Captura los valores de los campos
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;

            // Crea una nueva fila en la tabla
            const newRow = tableBody.insertRow();
            newRow.insertCell(0).textContent = name;
            newRow.insertCell(1).textContent = email;
            newRow.insertCell(2).textContent = phone;

            // Limpia el formulario
            form.reset();
        });
    </script>

@endsection