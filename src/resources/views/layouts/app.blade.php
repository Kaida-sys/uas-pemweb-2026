<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'Sistem Informasi Layanan UMKM')</title>

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.0.0-beta1.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/lindy-uikit.css') }}">
</head>

<body>
  @yield('content')

  <script src="{{ asset('assets/js/bootstrap-5.0.0-beta1.min.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
