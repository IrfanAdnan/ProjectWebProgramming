<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Ahli Keluarga</h1>

<form action="daftar-simpan.php" method="post">
    <table>
        <tr>
            <td>Nama Ahli keluarga</td>
            <td><input type="text" name="namaAhliKeluarga"></td>
        </tr>
        <tr>
            <td>No Telefon</td>
            <td><input type="text" name="noTel"></td>
        </tr>
          <tr>
            <td>Umur</td>
            <td><input type="text" name="Umur"></td>
        </tr>
        <tr>
            <td>Jantina</td>
            <td><input type="text" name="Jantina"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>
</body>
</html>