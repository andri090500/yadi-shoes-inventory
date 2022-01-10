<?php
session_start();
// cek session
if(!isset($_SESSION["admin"])){
  header("location:login.php");
}
// id dari url
$id = $_GET["id"];
require_once "database/db.php";
$allData = $koneksi->query("SELECT*FROM sepatu WHERE id_barang=$id");
$data = $allData->fetch_assoc();

// jika tombol edit dipencet
if(isset($_POST["edit"])){
  // get data post
  $jenis = htmlspecialchars($_POST["jenis"]);
  $merek = htmlspecialchars($_POST["merek"]);
  $warna = htmlspecialchars($_POST["warna"]);
  $stok = htmlspecialchars($_POST["stok"]);
  $harga = htmlspecialchars($_POST["harga"]);
  // masukan ke database
  $koneksi->query("UPDATE sepatu SET merek='$merek', jenis='$jenis', warna='$warna', stok=$stok, harga=$harga WHERE id_barang=$id");
  // cek udh masuk atau belum
  if($koneksi->affected_rows > 0){
    echo "<script>alert('Data berhasil diubah')</script>";
    echo "<script>document.location.href='index.php'</script>";
  }else{
    echo "<script>alert('Data gagal diubah')</script>";
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
    <link rel="stylesheet" href="asset/css/edit.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Edit Data</title>
  </head>
  <body>
    <!-- Edit data -->
    <div class="edit">
      <div class="box-edit">
        <h2>Edit data</h2>
        <form action="" method="post">
          <ul>
            <li><strong>Jenis</strong></li>
            <li><input type="text" name="jenis" value="<?php echo $data['jenis']; ?>" required /></li>
            <li><strong>Merek</strong></li>
            <li><input type="text" name="merek" value="<?php echo $data['merek']; ?>" required /></li>
            <li><strong>Warna</strong></li>
            <li><input type="text" name="warna" value="<?php echo $data['warna']; ?>" required /></li>
            <li><strong>Stok</strong></li>
            <li><input type="number" name="stok" value="<?php echo $data['stok']; ?>" required /></li>
            <li><strong>Harga</strong></li>
            <li><input type="text" name="harga" value="<?php echo $data['harga']; ?>" required /></li>
            <li>
              <button type="submit" name="edit" id="edit"><i class="fa fa-edit"></i> Edit</button>
            </li>
          </ul>
        </form>
        <a href="index.php"><i class="fa fa-close"></i></a>
      </div>
    </div>
    <script src="js/edit.js"></script>
  </body>
</html>
