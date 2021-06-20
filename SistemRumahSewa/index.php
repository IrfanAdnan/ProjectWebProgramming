<html>

<head>
  <link href="style.css" rel="stylesheet">
  <title>SRS</title>
  <style>
   
  </style>
</head>

<body>

  <div class="header">
  </div>

<center>
  <form action="pageHome.php" method="post">
      <h3>Login</h3>
<div class="container">
<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="username" required><br><br>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required><br><br>

<button type="submit">Login</button>

</form>

    <h1>Sistem Rumah Sewa(SRS)<h1>
        <marquee scrollamount="10" direction="left" behavior="scroll">
        </marquee>
  </div>

  <br>

  <center>
  <br>CRUD<br>

<a href="admin/">Admin (Suhaida)</a><br>
<br> menguruskan senarai rumah <br>
<br>memeriksa senarai ahli keluarga<br>

<br><a href="pelanggan/">Pelanggan (Irfan)</a><br>
<br>menguruskan senarai ahli keluarga<br>

<br><a href="manager/">Manager (Merisa)</a><br>
<br> menguruskan senarai pelanggan<br>


</center>

  <br><br>

  <hr color="black" width="100%" size="10">

  <center>
    <h2> DATABASE : SRS<h2>

        <h3>TABLE : RUMAH,PELANGGAN,KELUARGA,ADMIN,MANAGER<h3><br><br>

    <br>RUMAH (idRumah, jumlahBilik, model, harga)<br>
    <br>PELANGGAN(idPelanggan,idkeluarga,idRumah,NamaPelanggan,namaAhliKeluarga,noRumah,noTelPelanggan,email,password)<br>
    <br>KELUARGA(idpelanggan,idkeluarga,namaAhliKeluarga,noTel,Umur,Jantina )<br>
    <br>MANAGER(PassManager)<br>
    <br>ADMIN(PassAdmin)<br>
  </center>
  <center>
  <h2>TABLE: RUMAH</h2>
  <table border="1" cellpadding="8">
  <tbody><tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>idRumah</td>
    <td>int</td>
    <td>PK, A_I</td>
  </tr>
  <tr>
    <td>jumlahBilik</td>
    <td>int (10)</td>
    <td></td>
  </tr>
  <tr>
    <td>model</td>
    <td>varchar (10)</td>
    <td></td>
  </tr>
  <tr>
    <td>harga</td>
    <td>int</td>
    <td></td>
  </tr>
</tbody></table>


<table border="1" cellpadding="8">
    
  <h2>TABLE: PELANGGAN </h2>
  <tbody><tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>idPelanggan</td>
    <td>int</td>
    <td>PK, A_I</td>
  </tr>
   <tr>
    <td>idkeluarga</td>
    <td>int</td>
    <td></td>
  </tr>
   <tr>
        <tr>
    <td>idRumah</td>
    <td>int</td>
    <td>FK</td>
  </tr>
      <tr>
    <td>Nama</td>
    <td>varchar(20)</td>
    <td></td>
  </tr>
 <tr>
    <td>NamaPelanggan</td>
    <td>varchar(20)</td>
    <td></td>
  </tr>
  <tr>
    <td>namaAhliKeluarga</td>
    <td>varchar(20)</td>
    <td></td>
  </tr>
   <tr>
    <td>noRumah</td>
    <td>int</td>
    <td></td>
  </tr>
  <tr>
    <td>noTelPelanggan</td>
    <td>varchar(20)</td>
    <td></td>
  </tr>
   <tr>
    <td>email</td>
    <td>varchar(10)</td>
    <td></td>
  </tr>
   <tr>
    <td>password</td>
    <td>varchar(250)</td>
    <td></td>
  </tr>
</tbody></table>

<table border="1" cellpadding="8">

      <h2>TABLE: KELUARGA </h2>
      <tbody>
        <tr>
          <th>Name</th>
          <th>Type</th>
          <th>Extra</th>
        </tr>
        <tr>
          <td>idpelanggan</td>
          <td>int</td>
          <td>FK</td>
        </tr>
        <tr>
             <tr>
          <td>idKeluarga</td>
          <td>int</td>
          <td>PK, A_I</td>
        </tr>
        <tr>
       <tr>
          <td>namaAhliKeluarga</td>
          <td>varchar(20)</td>
          <td></td>
        </tr>
        <tr>
    <td>noTel</td>
    <td>varchar(20)</td>
    <td></td>
  </tr>
   <tr>
    <td>Umur</td>
    <td>int</td>
    <td></td>
  </tr>
  <tr>
    <td>Jantina</td>
    <td>varchar(10)</td>
    <td></td>
  </tr>
      </tbody>
    </table>
    
    <table border="1" cellpadding="8">

      <h2>TABLE: MANAGER </h2>
      <tbody>
        <tr>
          <th>Name</th>
          <th>Type</th>
          <th>Extra</th>
        </tr>
         <tr>
          <td>PassManager</td>
          <td>varchar(250)</td>
          <td></td>
        </tr>     
      </tbody>
    </table>
    
    <table border="1" cellpadding="8">

  <h2>TABLE: ADMIN </h2>
  <tbody><tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>PassAdmin</td>
    <td>varchar(250)</td>
    <td></td>
  </tr>
  </tbody></table>
  
  
</center>

  </var>
</body>

</html>


