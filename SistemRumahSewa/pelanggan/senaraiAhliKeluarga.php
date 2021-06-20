<h1>Senarai Ahli Keluarga</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>Nama Ahli Keluarga</th>
        <th>No Telefon</th>
        <th>Umur</th>
        <th>Jantina</th>
        <th>Tindakan</th>
    </tr>
    <?php

    $bil = 1;
    $sql = "SELECT * FROM keluarga WHERE idpelanggan = $idpelanggan";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->namaAhliKeluarga; ?></td>
            <td><?php echo $row->noTel; ?></td>
            <td><?php echo $row->Umur; ?></td>
             <td><?php echo $row->Jantina; ?></td>
            <td>
                <a href="index.php?menu=edit&idkeluarga=<?php echo $row->idkeluarga; ?>">Edit</a>
                |
                <a href="padam.php?idkeluarga=<?php echo $row->idkeluarga; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>