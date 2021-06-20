<h1>Senarai Ahli Keluarga</h1>
<h2>Irfan</h2>
<table border="1">
     <tr>
        <th>Bil</th>
        <th>Nama Ahli Keluarga</th>
        <th>No Telefon</th>
        <th>Umur</th>
        <th>Jantina</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM keluarga WHERE idpelanggan='1'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
             <td><?php echo $row->namaAhliKeluarga; ?></td>
              <td><?php echo $row->noTel; ?></td>
              <td><?php echo $row->Umur; ?></td>
              <td><?php echo $row->Jantina; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

<h2>Merisa</h2>
<table border="1">
    <tr>
         <tr>
        <th>Bil</th>
        <th>Nama Ahli Keluarga</th>
        <th>No Telefon</th>
        <th>Umur</th>
        <th>Jantina</th>
    </tr>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM keluarga WHERE idpelanggan='3'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
             <td><?php echo $row->namaAhliKeluarga; ?></td>
              <td><?php echo $row->noTel; ?></td>
              <td><?php echo $row->Umur; ?></td>
              <td><?php echo $row->Jantina; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

<h2>Suhaida</h2>
<table border="1">
    <tr>
          <tr>
        <th>Bil</th>
        <th>Nama Ahli Keluarga</th>
        <th>No Telefon</th>
        <th>Umur</th>
        <th>Jantina</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM keluarga WHERE idpelanggan='2'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
                <td><?php echo $bil++; ?></td>
             <td><?php echo $row->namaAhliKeluarga; ?></td>
              <td><?php echo $row->noTel; ?></td>
              <td><?php echo $row->Umur; ?></td>
              <td><?php echo $row->Jantina; ?></td>
        </tr>
        <?php
    }
    ?>
</table>