<?php
require '../conns.php';

$idpelanggan = $_POST['idpelanggan'];
$namaAhliKeluarga = $_POST['namaAhliKeluarga'];
$noTel= $_POST['noTel'];
$Umur = $_POST['Umur'];
$Jantina = $_POST['Jantina'];

$sql = "UPDATE keluarga SET namaAhliKeluarga = ?, noTel = ?, Umur = ?, Jantina = ? WHERE idpelanggan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssisi', $namaAhliKeluarga, $noTel, $Umur, $Jantina,$idpelanggan);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');