<?php
session_start();
// cek session
if(!isset($_SESSION["admin"])){
  header("location:login.php");
  exit;
}
require_once "database/db.php";
// jika tombol tambah dipencet
if(isset($_POST["tambah"])){
  // get data post
  $jenis = htmlspecialchars($_POST["jenis"]);
  $merek = htmlspecialchars($_POST["merek"]);
  $warna = htmlspecialchars($_POST["warna"]);
  $stok = htmlspecialchars($_POST["stok"]);
  $harga = htmlspecialchars($_POST["harga"]);
  // masukan ke database
  $koneksi->query("INSERT INTO sepatu VALUES('','$merek','$jenis','$warna',$stok,$harga)");
  // cek udh masuk atau belum
  if($koneksi->affected_rows > 0){
    echo "<script>alert('Data berhasil ditambahkan')</script>";
    echo "<script>document.location.href='index.php'</script>";
  }else{
    echo "<script>alert('Data gagal ditambahkan')</script>";
    echo "<script>document.location.href='index.php'</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="asset/css/tambah.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Edit Data</title>
  </head>
  <body>
    <!-- tambah data -->
    <div class="tambah2" id="tambah2">
      <div class="box-tambah">
        <h2>Tambah data</h2>
        <form action="" method="post">
          <ul>
            <li><strong>Jenis</strong></li>
            <li><input type="text" name="jenis" required /></li>
            <li><strong>Merek</strong></li>
            <li><input type="text" name="merek" required /></li>
            <li><strong>Warna</strong></li>
            <li><input type="text" name="warna" required /></li>
            <li><strong>Stok</strong></li>
            <li><input type="number" name="stok" required /></li>
            <li><strong>Harga</strong></li>
            <li><input type="text" name="harga" required /></li>
            <li>
              <button type="submit" name="tambah" id="add"><i class="fa fa-plus"></i> Tambah</button>
            </li>
          </ul>
        </form>
        <a href="index.php"><i class="fa fa-close"></i></a>
      </div>
    </div>
    <script src="js/tambah.js"></script>
  </body>
</html>
