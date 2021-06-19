<?php
$idpelanggan = $_GET['idpelanggan'];
$sql = "SELECT namaAhliKeluarga,noTel,Umur,Jantina FROM keluarga WHERE idpelanggan= ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idpelanggan);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($namaAhliKeluarga,$noTel,$Umur,$Jantina);
$stmt->fetch();
$stmt->close();
?>
<h1>Edit Data Keluarga</h1>

<form action="edit-simpan.php" method="post">
    <input type="hidden" name="idpelanggan" value="<?php echo $idpelanggan; ?>">
    <table>
        <tr>
            <td>Nama ahli keluarga</td>
            <td><input type="text" name="namaAhliKeluarga" value="<?php echo $namaAhliKeluarga; ?>"></td>
        </tr>
        <tr>
            <td>No Telefon</td>
            <td><input type="text" name="noTel" value="<?php echo $noTel; ?>"></td>
        </tr>
         <tr>
            <td>Umur</td>
            <td><input type="text" name="Umur" value="<?php echo $Umur; ?>"></td>
        </tr>
         <tr>
            <td>Jantina</td>
            <td><input type="text" name="Jantina" value="<?php echo $Jantina; ?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>