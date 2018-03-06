<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    {{--Título que van a heredar todas las vistas--}}
    <title>@yield('title', 'Tienda el Ávila')</title>
    {{--Fuente de estilo bootstrap--}}
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/sketchy/bootstrap.min.css">
    {{--Fuente de estilos para los iconos--}}
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{--Hoja de estilos propios: main.css--}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

  </head>
  <body>
    {{--barra de navegación--}}
    @include('store.partials.nav')
    {{--contenido--}}
    @yield('content')
    {{--footer--}}
    @include('store.partials.footer')

    {{--archivo de jquery (va antes que el de bootstrap)--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{--archivo de bootstrap de js--}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    {{--archivo de pinterest js--}}
    <script src="{{ asset('js/pinterest_grid.js') }}"></script>
    {{--archivo de script js que definimos--}}
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
