<?php
require '../conns.php';

# kalau admin
if (!isset($_SESSION['manager'])) {
  
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


<br> Nama Programmer: <a href="manager/">Manager (Merisa)</a>


</center>

<body>
<nav style="background-color: hotpink">
    <strong style="font-size: xx-large"></strong>
    [
    <a href="index.php?menu=senarai">senarai Pelanggan</a>
    |
     <a href="index.php?menu=daftar">daftar Pelanggan</a>
    |
    <a href="index.php?menu=katalaluan">Kata Laluan</a>
    |
    <a href="../logout.php">Keluar</a>
    ]
</nav>

<div>
    <?php
    $menu = 'senarai';
    if (isset($_GET['menu'])) $menu = $_GET['menu'];
    require "$menu.php";
    ?>
</div>
<footer style="background-color: hotpink">
    <h1>MANAGER</h1>
</footer>


</div></body></html>