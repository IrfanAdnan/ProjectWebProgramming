<?php
require '../conns.php';

$idrumah = $_POST['idrumah'];
$jumlahBilik = $_POST['jumlahBilik'];

$sql = "UPDATE rumah SET jumlahBilik = ? WHERE idrumah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $jumlahBilik, $idrumah);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senaraiRumah');