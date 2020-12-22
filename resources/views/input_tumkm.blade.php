<h1>input data mamang</h1>

<form action="{{route('pawb_store')}}"method="POST">
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
                <input type="submit" value="Submit">
                <input type="submit" value="Reset">
            </td>
        </tr>
    </table>

</form>