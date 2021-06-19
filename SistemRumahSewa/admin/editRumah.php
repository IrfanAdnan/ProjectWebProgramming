<?php
$idrumah = $_GET['idrumah'];
$sql = "SELECT jumlahBilik, model FROM rumah WHERE idrumah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idrumah);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($jumlahBilik, $model);
$stmt->fetch();
$stmt->close();
?>
<h1>Daftar Pelanggan Baru</h1>

<form action="edit-simpan.php" method="post">
    <input type="hidden" name="idpelanggan" value="<?php echo $idrumah; ?>">
    <table>
        <tr>
            <td>Jumlah Bilik</td>
            <td><input type="text" name="jumlahBilik" value="<?php echo $jumlahBilik; ?>"></td>
        </tr>
        <tr>
            <td>Model</td>
            <td><input type="text" name="model" value="<?php echo $model; ?>"></td>
        </tr>
         <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" value="<?php echo $harga; ?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>