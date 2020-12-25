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
    <title>Document</title>
</head>

<body>
  
	<div class="container">
		<div class="card">
			<div class="card-body">

    <h1>Database UMKM saat ini</h1>
    <table class="table table-bordered">
        <tr>
            <td>No</td>
            <td>Jenis</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Kontak</td>
            <td>aksi</td>
        </tr>
        @foreach ($tumkms as $tumkm)
        <tr>
            <td>{{ $tumkm->id }}</td>
            <td>{{ $tumkm->jenis }}</td>
            <td>{{ $tumkm->nama }}</td>
            <td>{{ $tumkm->alamat }}</td>
            <td>{{ $tumkm->kontak }}</td>
            <td><a href="{{route('delete_tumkm', $tumkm->id)}}">delete</td>
    <table class="table table-bordered">
        </tr>   
        @endforeach
    </table>
</body>
</html>
@endsection