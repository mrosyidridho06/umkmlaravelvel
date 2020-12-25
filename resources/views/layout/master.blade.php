<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
  <div class="jumbotron text-center">
  <h1>Selamat Datang Di Si-UMKM</h1>
  <p>Anda dapat mencari UMKM ataupun Promosi UMKM anda!</p>
  <nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/register">Beranda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/tumkm">Index</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/tumkm_input">Daftar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/login">Login</a>
    </li>
  </ul>
</nav>
</div>
@yield('content')
</body>
</html>