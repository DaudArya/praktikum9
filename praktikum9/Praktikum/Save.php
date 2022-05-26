<?php
//perintah memuat isi connect.php ke dalam file create-table.php 
include "connect.php";

//ambil data dari form di kontak.php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $pesan = $_POST['pesan'];

    //query insert data formulir ke dalam database
    $sql = "INSERT kontak set nama='$nama', jenis_kelamin='$jenis_kelamin', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";
    $query = mysqli_query($conn, $sql);

    //mengecek apakah query berhasil di insert
    if ($query) {
        //jika berhasil maka akan dialihkan ke halaman cetak.php
        header('location: Print.php');
    } else {
        //jika gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}