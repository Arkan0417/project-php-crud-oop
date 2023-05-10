<?php
//property
$host = "localhost";
$user = "root";
$pass = "";
$db = "tas";

//membuat koneksi untuk login multilevel
$koneksi = new mysqli("$host", "$user", "$pass", "$db");

//pengecekan koneksi apakah berhasil atau tidak
if($koneksi->connect_errno){
    echo "Gagal koneksi database!". $koneksi->connect_errno;
}


?>