<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }} | {{ $title }}</title>
  <meta name="description" content="Foris Labs is a virtual 3d Laboratory designed to eliminate the -probem if">
  <meta name="keywords" content="foris labs laboratory 3d virtual offline">
  <!-- Website Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">


</head>

<body x-data>
  @include('layouts.guest.navigation')
  <div class="text-ash-900 font-sans antialiased">
    {{ $slot }}

    @include('layouts.guest.footer')
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
</body>

</html>
