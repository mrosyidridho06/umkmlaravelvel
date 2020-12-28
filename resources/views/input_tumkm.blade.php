@extends('layout.master')
@section('title', 'Si-UMKM')
@section('content')
<html>
<head>
    <meta>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <meta>
</head>
<body>
    <td>
    <h1><p class="text-center">Silahkan Masukan Data UMKM anda Untuk diPromosikan</p></h1>
        <form action="{{route('pawb_store')}}"method="POST">
    </td>
    @csrf
    @csrf
    <table>
        <tr>
        <td>Jenis</td>
            <td>:</td>
            <td><input type="text" name="jenis"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Kontak</td>
            <td>:</td>
            <td><input type="text" name="kontak"></td>
        </tr>
        <tr>
            <td>
                <input button class="btn btn-primary" type="submit" value="Submit"></button>
                <input button class="btn btn-secondary" type="reset" value="reset"></button>
            </td>
        </tr>
    </table> 
	</div>
</body>
</html>
@endsection