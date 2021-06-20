<?php
require '../conns.php';

$idkeluarga = $_POST['idkeluarga'];
$idrumah = $_POST['idrumah'];
$nama = $_POST['nama'];
$namapelanggan = $_POST['namapelanggan'];
$noRumah= $_POST['noRumah'];
$noTelPelanggan = $_POST['noTelPelanggan'];
$email = $_POST['email'];
$password = password_hash($nama, PASSWORD_DEFAULT);

$sql = "INSERT INTO pelanggan(idpelanggan,idkeluarga,idrumah,nama,namapelanggan,namaAhliKeluarga,noRumah, noTelPelanggan, email,password) VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('iisssisss', $idkeluarga,$idrumah,  $nama, $namapelanggan, $namaAhliKeluarga,$noRumah, $noTelPelanggan,$email,$password);
$stmt->execute();

if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, username ini telah wujud.');
        window.location = 'index.php?menu=daftar';
    </script>
    <?php
} else {
    header('location: index.php?menu=senarai');
}
