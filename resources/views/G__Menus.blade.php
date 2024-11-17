<!DOCTYPE html>
<html lang="en">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet"> <!--Llama al estilo hubicado en app/public/css/menu.css -->  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Menús</title>
</head>
<body>
    <h1>Menú Generado</h1>



    <nav class="menu_P">
    <ul>
        @foreach ($menus as $menu)
            <li>
                <a href="{{ $menu->ruta }}">{{ $menu->Titulo }}</a>
            </li>
        @endforeach
    </ul>
</nav>
</body>
</html>
