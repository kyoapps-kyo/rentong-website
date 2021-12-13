<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', '仁通')</title>
  <meta name="description" content="@yield('description', '')" />
  <meta name="keywords" content="@yield('keyword', '不動産,賃貸,住宅,海外貿易')" />

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  @yield('styles')
</head>

<body>
  <div id="app">

    @include('layouts._header')

    <div>

      @yield('content')

    </div>

    @include('layouts._footer')
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
  @yield('scripts')
</body>

</html>
