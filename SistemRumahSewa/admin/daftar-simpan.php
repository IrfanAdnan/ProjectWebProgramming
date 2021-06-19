<?php
require '../conns.php';


$jumlahBilik = $_POST['jumlahBilik'];
$model =$_POST['model'];
$harga =$_POST['harga'];

$sql = "INSERT INTO rumah(idrumah, jumlahBilik, model, harga) VALUES (null, ?, ?,?)";
$stmt = $conn->prepare($sql);
echo $conn->error;
$stmt->bind_param('isi',$jumlahBilik, $model, $harga);
$stmt->execute();

if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, username ini telah wujud.');
        window.location = 'index.php?menu=daftar';
    </script>
    <?php
} else {
    header('location:index.php?menu=senaraiRumah');
}