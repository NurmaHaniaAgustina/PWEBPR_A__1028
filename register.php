<?php
require 'koneksi.php';
$Nama = $_POST["Nama"];
$Username = $_POST["Username"];
$E-mail = $_POST["E-mail"];
$Password = $_POST["Password"];
$Konfirmasi Password = $_POST["Konfirmasi Password"];

$query_sql = "INSERT INTO tbl_users (Nama, Username, E-mail, Password, Konfirmasi Password)
            VALUES ('$Nama','$Username','$E-mail','Password','Konfirmasi Password')";



if (mysqli_num_rows($conn, $query_sql)) {
    header("Location: index.html");
}else {
    echo "Pendaftaran Gagal : " .mysqli_error($conn);
}