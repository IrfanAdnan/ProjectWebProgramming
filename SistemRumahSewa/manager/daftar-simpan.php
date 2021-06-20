<?php
require '../conns.php';

$idrumah = $_POST ['idrumah'];
$nama = $_POST['nama'];
$namapelanggan = $_POST['namapelanggan'];
$noRumah= $_POST['noRumah'];
$noTelPelanggan = $_POST['noTelPelanggan'];
$email = $_POST['email'];
$password = password_hash($nama, PASSWORD_DEFAULT);


$sql = "INSERT INTO pelanggan(idpelanggan,idrumah,nama,namapelanggan,namaAhliKeluarga,noRumah, noTelPelanggan, email,password) VALUES (null, ?,?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('isssisss',$idrumah, $nama, $namapelanggan, $namaAhliKeluarga,$noRumah, $noTelPelanggan,$email,$password);
$stmt->execute();

if ($stmt->error) {
    echo 'Error dari database: ' . $stmt->error;
    exit;
}
$stmt->close();
