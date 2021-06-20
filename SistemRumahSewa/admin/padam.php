<?php
require '../conns.php';

$idrumah = $_GET['idrumah'];
$sql = "DELETE FROM rumah WHERE idrumah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idrumah);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senaraiRumah');