<?php
require '../conns.php';

$idpelanggan = $_GET['idpelanggan'];
$sql = "DELETE FROM pelanggan WHERE idpelanggan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idpelanggan);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');