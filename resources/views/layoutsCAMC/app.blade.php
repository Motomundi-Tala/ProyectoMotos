<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <!-- Fuente Nunito -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Estilos -->
   
</head>

<body>
 <!-- Menú de navegación -->
 
  @include('partials.navigation')

  @if (\Session::has('success'))
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

  @yield('contenido')
</body>

</html>
