<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hallo mamang</h1>
    <a href="{{route('input_tumkm')}}">input data tumkm</a>
    <table>
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
        </tr>   
        @endforeach
    </table>
</body>
</html>