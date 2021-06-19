<h1>Senarai Pelanggan</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>Nama </th>
        <th>Nama Pelanggan</th>
         <th>No Rumah</th>
        <th>No Tel</th>
        <th>Email</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM pelanggan ORDER BY namapelanggan";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->namapelanggan; ?></td>
             <td><?php echo $row->noRumah; ?></td>
             <td><?php echo $row->noTelPelanggan; ?></td>
            <td><?php echo $row->email; ?></td>
            <td>
                <a href="reset.php?idpelanggan=<?php echo $row->idpelanggan; ?>">Reset</a>
                |
                <a href="index.php?menu=edit&idpelanggan=<?php echo $row->idpelanggan; ?>">Edit</a>
                |
                <a href="padam.php?idpelanggan=<?php echo $row->idpelanggan; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>