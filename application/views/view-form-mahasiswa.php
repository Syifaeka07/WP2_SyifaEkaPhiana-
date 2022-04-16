<html>
<head>
 <title>Form Input Data Mahasiswa</title>
</head>
<body>
 <center>
 <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Input Data Mahasiswa
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>Nama Siswa</th>
 <th>:</th>
 <td>
 <input type="text" name="nama" id="nama">
 </td>
 </tr>
 <tr>
 <th>NIS</th>
 <th>:</th>
 <td>
 <input type="text" name="nis" id="nis">
 </td>
 </tr>
 <tr>
 <th>Kelas</th>
 <th>:</th>
 <td>
 <input type="text" name="kelas" id="kelas">
 </td>
 </tr>
 <tr>
 <th>Tanggal Lahir</th>
 <th>:</th>
 <td>
 <input type="date" name="tanggal" id="tanggal">
 </td>
 </tr>
 <tr>
 <th>Tempat Lahir</th>
 <th>:</th>
 <td>
 <input type="text" name="tempat" id="tempat">
 </td>
 </tr>
 <tr>
 <th>Alamat</th>
 <th>:</th>
 <td>
 <input type="text" name="alamat" id="alamat">
 </td>
 </tr>
 <tr>
     <th>Jenis Kelamin</th> 
     <td>:</td>
     <td>
         <input type="radio" name="jenis" value="laki-laki" checked="">laki-laki
         <input type="radio" name="jenis" value="perempuan" checked="">perempuan
</td>
</tr>
 <tr>
 <th>Agama</th>
 <td>:</td>
 <td>
 <select name="agama" id="agama">
 <option value="">Pilih Agama</option>
 <option value="islam">islam</option>
 <option value="kristen">kristen</option>
 <option value="katolik">katolik</option>
 <option value="budha">budha</option>
 <option value="hindu">hindu</option>
 <option value="protestan">protestan</option>
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