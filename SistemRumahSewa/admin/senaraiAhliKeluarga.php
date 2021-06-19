<h1>Senarai Ahli Keluarga</h1>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>Username</th>
        <th>Nama Penuh</th>
        <th>Nama Ahli Keluarga</th>
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
             <td><?php echo $row->namaAhliKeluarga; ?></td>
        </tr>
        <?php
    }
    ?>
</table>