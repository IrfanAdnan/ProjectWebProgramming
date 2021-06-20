<?php
require '../conns.php';

$idpelanggan = $_GET['idpelanggan'];
$sql = "SELECT nama FROM pelanggan WHERE idpelanggan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idpelanggan);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username);
$password = password_hash($username, PASSWORD_DEFAULT);
$stmt->close();

$sql = "UPDATE pelanggan SET password = ? WHERE idpelanggan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $password, $idpelanggan);
$stmt->execute();

header('location: index.php?menu=senarai');