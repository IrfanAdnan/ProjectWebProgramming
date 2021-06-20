<?php
$idpelanggan = $_GET['idpelanggan'];
$sql = "SELECT nama, namapelanggan FROM pelanggan WHERE idpelanggan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idpelanggan);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nama, $namapelanggan);
$stmt->fetch();
$stmt->close();
?>
<h1>Daftar Pelanggan Baru</h1>

<form action="edit-simpan.php" method="post">
    <input type="hidden" name="idpelanggan" value="<?php echo $idpelanggan; ?>">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" value="<?php echo $nama; ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Penuh</td>
            <td><input type="text" name="fullname" value="<?php echo $namapelanggan; ?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>