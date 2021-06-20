<?php
require '../conns.php';

$idpelanggan = $_POST['idpelanggan'];
$fullname = $_POST['fullname'];

$sql = "UPDATE pelanggan SET fullname = ? WHERE idpelanggan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $fullname, $idpelanggan);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');