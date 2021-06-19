<?php
require '../conn.php';

$idcustomer = $_GET['idpelanggan'];
$sql = "DELETE FROM customer WHERE idpelanggan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idpelanggan);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');