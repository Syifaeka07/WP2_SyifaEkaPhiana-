<html>
<head>
    <title>Form Input Data Mahasiswa</title>
</head>

<body>
    <center>
         <form action="<?= base_url('Mahasiswa/cetak'); ?>"method="post">
            <table>
                <tr>
                    <th colspan="8">
                        Form Input Data Mahasiswa
                    </th>
                </tr>
                <tr>
                    <td colspan="8">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="Nama" id="Nama Mahasiswa">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="NIS" id="NIS">
                    </td>
                 </tr>
                 <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="Kelas" id="Kelas">
                    </td>
                 </tr>
                 <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="Date" name="Tanggal" id="Tanggal">
                    </td>
                 </tr>
                 <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="Tempat" id="Tempat">
                    </td>
                 </tr>
                 <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="Alamat" id="Alamat">
                    </td>
                 </tr>
                 <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="Jenis_Kelamin" value="Laki-Laki" checked="">Laki-laki
                        <input type="radio" name="Jenis_Kelamin" value="Perempuan" checked="">Perempuan
                    </td>
                 </tr>
                 <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="Agama" id="Agama">
                            <option value="">Pilih SKS</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="khonghucu">khonghucu</option>
                        </select>
                    </td>
                 </tr>
                 <tr>
                    <td colspan="8" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
