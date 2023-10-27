<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="proses.php" method="post">
<h4>DAFTAR BARANG :</h4>
            <p>baju   : Rp.80.000</p>
            <p>celana : Rp.185.000</p>
            <p>tas    : Rp.113.000</p>
            <p>sepatu : Rp.225.000</p>
            <p>============================</p>
    <table>
        <tr>
            <td><label for="#">Nama Barang </label>:</td>
            <td><input type="text" name="nama_barang"></td>
        </tr>
        <tr>
            <td><label for="#">Jumlah Barang </label>:</td>
            <td><input type="number" name="jumlah_barang"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Proses"></td>
        </tr>
    </table>
</form>


</body>
</html>