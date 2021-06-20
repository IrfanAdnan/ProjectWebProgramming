<?php
require '../conns.php';

# kalau admin
if (!isset($_SESSION['admin'])) {
    
}
# jangan bubuh kalau bukan admin

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


<br> Nama Programmer: <a href="admin/">admin (suhaida)</a>


</center>
 

<nav style="background-color: hotpink">
    <strong style="font-size: xx-large"></strong>
    [
    <a href="index.php?menu=senaraiAhliKeluarga">Senarai Ahli Keluarga</a>
    |
     <a href="index.php?menu=senaraiRumah">Senarai Rumah</a>
    |
     <a href="index.php?menu=daftarRumah">Daftar Rumah</a>
    |
     <a href="index.php?menu=katalaluan">Kata Laluan</a>
    |
    <a href="../logout.php">Keluar</a>
    ]
</nav>

<div>
    <?php
    $menu = 'senaraiRumah';
    if (isset($_GET['menu'])) $menu = $_GET['menu'];
    require "$menu.php";
    ?>
</div>

<footer style="background-color: #FF3E00">
    <h1>ADMIN</h1>
</footer>


</div></body></html>