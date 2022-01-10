<?php 
session_start();
if(!isset($_SESSION["admin"])){
    header("location:login.php");
    exit;
}
require_once "database/db.php";
$id = $_GET["uniq"];
// hapus data
$koneksi->query("DELETE FROM sepatu WHERE id_barang=$id");
if($koneksi->affected_rows >0){
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<script>document.location.href='index.php'</script>";
}else{
    echo "<script>alert('Data gagal dihapus')</script>";
    echo "<script>document.location.href='index.php'</script>";
}

?>