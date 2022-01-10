<?php
// konek database
$host = "localhost";
$username = "root";
$password = "";
$database = "gudang_sepatu";

$koneksi = new mysqli($host,$username,$password,$database);

// cek koneksi
// if($koneksi->connect_error){
//     echo "koneksi gagal";
// }else{
//     echo "koneksi berhasil";
// }

?>