@section("title","MotoMundi - Carta Factura")

<!-- Encabezado -->
<header class="header">
    <h1>Motomundi - Carta Factura</h1>
</header>

@section('contenido')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: right; margin-bottom: 20px; }
        .logo { width: 120px; height: auto; } /* Ajuste de tamaño del logo */
        .title { text-align: center; font-size: 28px; font-weight: bold; margin-top: 20px; color: #333; }
        .content { text-align: justify; margin: 20px 0; }
        .table-container { margin-top: 20px; padding: 0 70px; }
        .table { width: 100%; border-collapse: collapse; margin: auto; }
        .table, .table th, .table td { border: 1px solid black; padding: 8px; }
        .table th { background-color: #f2f2f2; text-align: center; }
        .section-title { font-size: 18px; font-weight: bold; text-align: center; background-color: #f2f2f2; }
        footer { text-align: center; color: #87CEEB; font-weight: bold; margin-top: 20px; }
        .justified-text { text-align: justify; margin-top: 20px; }
        .btn { text-decoration: none; padding: 10px 20px; background-color: #0056b3; color: #fff; border-radius: 5px; font-weight: bold; }
        .btn:hover { background-color: #004494; }
    </style>
</head>
<body>
    <div class="menu">
        <img src="{{ asset('imagenes/logo.png') }}" alt="Logo" class="logo">
        <p>Tala, Jal. {{ date('d/m/Y') }}</p>
      
    </div>


<div class="title">CARTA FACTURA</div>

<div class="content">
    <p>Por medio de la presente hacemos constar que se vendió una motocicleta nueva sin rodar, las especificaciones del vehículo y los generales del cliente se describen a continuación:</p>
</div>

<div class="table-container">
    <table class="table">
        <tr>
            <th colspan="4" class="section-title">Datos del Cliente</th>
        </tr>
        <tr>
            <th>NOMBRE</th>
            <td colspan="3">Nombre del cliente Completo</td>
        </tr>
        <tr>
            <th>CALLE</th>
            <td colspan="3">Calle del cliente</td>
        </tr>
        <tr>
            <th rowspan="2">COLONIA</th>
            <td rowspan="2">Colonia</td>
            <th>NO.</th>
            <td>cliente->numero</td>
        </tr>
        <tr>
            <th>RFC.</th>
            <td colspan="2">RFC->Cliente</td>
        </tr>
        <tr>
            <th>CIUDAD</th>
            <td>Ciudad</td>
            <th>C.P.</th>
            <td>$cliente->codigo_postal</td>
        </tr>
        <tr>
            <th rowspan="2">E MAIL</th>
            <td>Correo</td>
            <th rowspan="2">TEL</th>
            <td>$cliente->telefono</td>
        </tr>
        <tr></tr>
        <tr>
            <th>MÉTODO DE PAGO</th>
            <td>$cliente->metodo_pago</td>
            <th>USO CFDI</th>
            <td>$cliente->uso_cfdi</td>
        </tr>
        <tr>
            <th>FORMA DE PAGO</th>
            <td>$cliente->forma_pago</td>
            <th>RÉGIMEN FISCAL</th>
            <td>$cliente->regimen_fiscal</td>
        </tr>

        <tr>
            <th colspan="4" class="section-title">Datos del Vehículo</th>
        </tr>
        <tr>
            <th>VEHÍCULO</th>
            <td colspan="3">Tipo de vehículo</td>
        </tr>
        <tr>
            <th>MARCA</th>
            <td colspan="3">Marca del vehículo</td>
        </tr>
        <tr>
            <th>AÑO</th>
            <td colspan="3">Año del vehículo</td>
        </tr>
        <tr>
            <th>MODELO</th>
            <td colspan="3">Modelo</td>
        </tr>
        <tr>
            <th>COLOR</th>
            <td colspan="3">Color</td>
        </tr>
        <tr>
            <th>SERIE</th>
            <td colspan="3">Serie</td>
        </tr>
        <tr>
            <th>MOTOR</th>
            <td colspan="3">Motor</td>
        </tr>
    </table>
</div>

<div class="justified-text">
    <p>Extendemos la presente con el fin de que el comprador de la unidad mencionada pueda realizar gestiones referentes a este vehículo: trámite de placas, acreditación de la propiedad y traslado a destino. Sin que tal circunstancia implique a su favor otros derechos que los mencionados por la ley. No pudiendo, por lo mismo, hacer acto de dicha motocicleta hasta entrega de factura original.
    Esta operación ha quedado legalizada por medio de un contrato de compraventa. El artículo referido es propiedad de la persona mencionada, y el cliente hace constar que dicho vehículo se entrega en óptimo estado tanto mecánico como de carrocería, sin faltantes de piezas o plásticos, y con la llave original, duplicado, kit de herramientas y póliza de garantía.</p>
</div>

<div style="text-align: izquierda; margin-top: 20px;">
    <a href="{{route('pdf')}}" class="btn">Descargar Carta Factura</a>
</div>

<footer>
    DISTRIBUIDOR AUTORIZADO <br>
    BAJAJ TALA <br>
    AV. SOLIDARIDAD #174 IN.1-2-3 PLAZA AQUA <br>
    TEL: 33 1942 1942 <br>
    MOTO-MUNDI <br>
    RFC: CARE741204G94 <br>
    CARRETERA INTERNACIONAL #541 A. CENTRO <br>
    TEQUILA, JALISCO, MEXICO. C.P. 46400 <br>
    TEL: 37 47 42 46 63
</footer>

</body>
</html>
