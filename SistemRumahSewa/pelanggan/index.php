<?php
require '../conn.php';

# kalau customer. Dalam session ada idcustomer
if (!isset($_SESSION['idpelanggan'])) {
     header('location: ../logout.php');
} else {
    $idpelanggan = $_SESSION['idpelanggan'];
    $sql = "SELECT * FROM pelanggan WHERE idpelanggan = $idpelanggan";
    $row = $conn->query($sql)->fetch_object();
    $fullname = $row->nama;
}
# jangan bubuh kalau bukan customer
?>

<html lang="en"><head><style id="stndz-style"></style>
    <title>SRS</title>

    <link rel="stylesheet" href="stylesheet.css">
  </head>

  <body>
   
 <div data-role="page" id="page1">
<div class="header">
  <h1></h1>
</div>

<center>

<h1>Nama sistem: Sistem Rumah Sewa (SRS)</h1><br>


<br> Nama Programmer: <a href="pelanggan/">pelanggan (irfan)</a>


</center>
<nav style="background-color: hotpink">
    <strong style="font-size: xx-large"></strong>
    [
    <a href="index.php?menu=senarai">daftar ahli keluarga</a>
    |
    <a href="index.php?menu=senaraiAhliKeluarga">senarai ahli keluarga</a>
    |
    <a href="../logout.php">Keluar</a>
    ]
</nav>

<div>
    <?php
    $menu = 'senaraiAhliKeluarga';
    if (isset($_GET['menu'])) $menu = $_GET['menu'];
    require "$menu.php";
    ?>
</div>

<footer style="background-color: hotpink">
    Nama Pelanggan: <?php echo $fullname; ?>
</footer>

</div></body></html>