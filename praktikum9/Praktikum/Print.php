<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "connect.php";

//Query untuk menampilkan isi tabel kontak yang diurutkan berdasarkan nama
$sql = "select * from kontak order by nama;";
//Mengakses query dengan memanggil koneksi dan query sql atau jika gagal akan memunculkan pesan gagal
$query = mysqli_query($conn, $sql) or die("Proses cetak gagal");

//menampilkan tabel sesuai dengan desain yang ada di bawah
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'> 
<tr>
<th>No</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Email</th>
<th>Alamat</th>
<th>Kota</th>
<th>Pesan</th>
<th></th>";
$no = 1;

//perulangan untuk menampilkan isi tabel sesuai index
while ($hasil = mysqli_fetch_row($query)) {
    echo "<tr>
<td>$hasil[0]</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
<td>$hasil[3]</td>
<td>$hasil[4]</td>
<td>$hasil[5]</td>
<td>$hasil[6]</td>
</tr>";
    $no++;
}
echo "</table>";
?>
<!-- link kembali untuk mengembalikan ke form kontak.php yang berisi form -->
<a href="Contact.php">Kembali</a>