<?php
require '../conns.php';

$idkeluarga = $_POST['idkeluarga'];
$namaAhliKeluarga = $_POST['namaAhliKeluarga'];
$noTel= $_POST['noTel'];
$Umur = $_POST['Umur'];
$Jantina = $_POST['Jantina'];

$sql = "UPDATE keluarga SET namaAhliKeluarga = ?, noTel = ?, Umur = ?, Jantina = ? WHERE idkeluarga = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssisi', $namaAhliKeluarga, $noTel, $Umur, $Jantina,$idkeluarga);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');