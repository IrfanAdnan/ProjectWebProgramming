<?php
require '../conns.php';

$idkeluarga = $_GET['idkeluarga'];
$sql = "DELETE FROM keluarga WHERE idkeluarga = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idkeluarga);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');