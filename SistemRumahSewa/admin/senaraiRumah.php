<h1>Senarai Rumah</h1>

<table border="1">
     <tr>
        <th>Bil</th>
        <th>Jumlah Bilik</th>
        <th>Model</th>
        <th>Harga</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM rumah ORDER BY idrumah";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
       <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->jumlahBilik; ?></td>
            <td><?php echo $row->model; ?></td>
             <td><?php echo $row->harga; ?></td>
            <td>
                <a href="editRumah.php?menu=edit&idrumah=<?php echo $row->idrumah; ?>">Edit</a>
                |
                <a href="padam.php?idpelanggan=<?php echo $row->idpelanggan; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>