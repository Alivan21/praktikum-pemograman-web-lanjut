<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Alfan Olivan | Views</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- Styles -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="container-fluid bg-dark d-flex justify-content-center align-items-center">
  <main class="d-flex justify-content-center align-items-center my-5">
    @yield('content')
  </main>
</body>

</html>
