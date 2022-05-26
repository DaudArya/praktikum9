<?php
//perintah memuat isi connect.php ke dalam file create-table.php 
include "config.php";

//query untuk membuat tabel kontak 
$sql = "CREATE TABLE users (
id INT(55) NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(200) NOT NULL,
email VARCHAR (40),
password VARCHAR(10),
alamat VARCHAR (150),
makanan VARCHAR(120))";

//Mengecek apakah terjadi eror ketika pembuatan tabel
if (mysqli_query($conn, $sql)) {
    echo "New Record Succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//Menutup koneksi
mysqli_close($conn);