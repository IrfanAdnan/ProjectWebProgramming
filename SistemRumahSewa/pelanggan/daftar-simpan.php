<?php
require '../conns.php';

$idpelanggan =$_SESSION['idpelanggan'];
$namaAhliKeluarga = $_POST['namaAhliKeluarga'];
$noTel =$_POST['noTel'];
$Umur =$_POST['Umur'];
$Jantina =$_POST['Jantina'];


$sql = "INSERT INTO keluarga(idpelanggan,idkeluarga, namaAhliKeluarga, noTel, Umur, Jantina) VALUES (?,null, ?, ?,?,?)";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('issis',$idpelanggan,$namaAhliKeluarga, $noTel, $Umur, $Jantina);
$stmt->execute();

if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, username ini telah wujud.');
        window.location = 'index.php?menu=daftar';
    </script>
    <?php
} else {
    header('location:index.php?menu=senarai');
}