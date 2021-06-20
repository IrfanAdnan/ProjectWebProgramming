<h1>Daftar Pelanggan Baru</h1>

<form action="daftar-simpan.php" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="namapelanggan"></td>
        </tr>
        <tr>
            <label>No Rumah</label>
                <select name="noRumah" id="noRumah">
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                    <option value="4">4</option>
               </select>
         </tr>
        <tr>
            <td>No Tel</td>
            <td><input type="text" name="noTelPelanggan"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
         <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>