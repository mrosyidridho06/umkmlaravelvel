@extends('layout.master')
@section('title', 'Si-UMKM')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="container">
    
    <figure class="figure">
        <img src="{{url('/assets/bantuan.jpg')}}" class="figure-img img-fluid rounded" alt="ini bantuan">
        <figcaption class="figure-caption">A caption for the above image.</figcaption>
    </figure>
</div>
</body>
</html>
@endsection
