<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Alfan Olivan | Model</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- Styles -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="container-fluid bg-secondary">
  <main class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-dark border border-dark rounded-2 p-5">
      @yield('content')
    </div>
  </main>
</body>

</html>
