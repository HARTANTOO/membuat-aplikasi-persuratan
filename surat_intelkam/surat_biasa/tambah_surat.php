<h1 align="center">Tambah Surat Masuk</h1>
<br><br>
<form action="proses_tambah.php" method="POST">
    <table align="center">
        <tr>
            <td>Id Surat : </td>
            <td><input type="text" name="id_surat" size="15" maxlength="15" required></td>
        </tr>
        <tr>
            <td>No urut surat :</td>
            <td><input type="text" name="no_urut" size="15" maxlength="15" required></td>
        </tr>
        <tr>
            <td>Tgl Masuk :</td>
            <td><input type="date" name="tgl_msk" size="15" maxlength="15" required></td>
        </tr>
        <tr>
            <td>No Surat :</td>
            <td><input type="text" name="no_surat" size="25" maxlength="50" required></td>
        </tr>
        <tr>
            <td>Lampiran :</td>
            <td><input type="text" name="lampiran" size="15" maxlength="15" required></td>
        </tr>
        <tr>
            <td>Surat Dari</td>
            <td><input type="text" name="dari" size="15" maxlength="50" required></td>
        </tr>
        <tr>
            <td>No Sium</td>
            <td><input type="text" name="no_sium" size="15" maxlength="15" required></td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td><input type="text" name="perihal" size="15" maxlength="100" required></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input type="text" name="keterangan" size="15" maxlength="15" required></td>
        </tr>
        <tr>
            <td>
            <input type="submit" name="simpan" value="tambah">
            <input type="reset" name="reset" value="batal"> 
            </td>
        </tr>
    </table>
</form>
