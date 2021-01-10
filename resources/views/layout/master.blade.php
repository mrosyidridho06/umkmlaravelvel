<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>

  <div class="jumbotron text-center">
  <h1 class="display-3">Selamat Datang Di Si-UMKM</h1>
  <p class="lead">Anda dapat mencari UMKM ataupun Promosi UMKM anda!</p>
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item"><a href="/tumkm">Index</a></li>
    <li class="breadcrumb-item"><a href="/tumkm_input">Daftar</a></li>
    <li class="breadcrumb-item"><a href="/login">Login</a></li>
    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
  </ol>
  </nav>
  </div>
@yield('content')
</body>
</html>