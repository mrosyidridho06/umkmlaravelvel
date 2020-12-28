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
       
        <form method="POST" action="{{route('tumkm_update',$tuma->id)}}">
    </td>
    @csrf
    <h1><p class="text-center">Silahkan Ubah data UMKM yang benar</p></h1>
        <table>
            <tr>
            <td>Jenis</td>
                <td>:</td>
                <td><input type="text" value="{{$tuma->jenis}}" name="jenis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" value="{{$tuma->nama}}" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea input value="{{$tuma->alamat}}" name="alamat" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td>:</td>
                <td><input type="text" value="{{$tuma->kontak}}" name="kontak"></td>
            </tr>
            <tr>
                <td>
                    <input button class="btn btn-primary" type="submit" value="Submit"></button>
                    <input type="submit" value="Reset">
                </td>
            </tr>
        </table>
    </form> 
	</div>
</body>
</html>
@endsection