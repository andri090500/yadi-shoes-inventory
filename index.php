<?php
session_start();
// cek session
if(!isset($_SESSION["admin"])){
  header("location:login.php");
  exit;
}
// require database
require_once "database/db.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="asset/css/index.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Dashboard</title>
  </head>
  <body>
    <h2 class="header">
      <i class="fa fa-home"></i> Dashboard Admin <a href="logout.php"><i class="fa fa-sign-out"></i> logout</a>
    </h2>
    <div class="pembungkus-tabel">
      <h2>Data Sepatu</h2>
      <form action="" method="post">
        <input type="text" name="keyword" placeholder="cari data sepatu" autofocus required />
        <button type="submit" name="cari" title="cari data"><i class="fa fa-search"></i> cari</button>
      </form>
      <div class="tabel">
      <table>
        <tr>
          <th>No</th>
          <th>Jenis</th>
          <th>Merek</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Hapus | Edit</th>
        </tr>
        <?php if(isset($_POST["cari"])):?>
          <?php $keyword = $_POST["keyword"];
            $no = 1;
            $allData = $koneksi->query("SELECT*FROM sepatu WHERE merek LIKE '%$keyword%' OR jenis LIKE '%$keyword%' OR warna LIKE '%$keyword%' OR stok LIKE '%$keyword%' OR harga LIKE '%$keyword%'");?>
        <?php while($data = $allData->fetch_assoc()):?>
          <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $data["jenis"];?></td>
            <td><?php echo $data["merek"];?></td>
            <td><?php echo $data["warna"];?></td>
            <td><?php echo $data["stok"];?></td>
            <td>Rp. <?php echo number_format($data["harga"]);?></td>
            <td>
            <a href="hapusData.php?uniq=<?php echo $data["id_barang"]; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash" title="hapus data"></i></a> | <a href="editData.php?id=<?php echo $data["id_barang"];?>"><i class="fa fa-edit" title="edit data"></i></a>
          </td>
        </tr>
          <?php $no++;?>
        <?php endwhile;?>
        <?php else:?>
          <?php $allData = $koneksi->query("SELECT*FROM sepatu");
          $no = 1;?>
          <?php while($data = $allData->fetch_assoc()):?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $data["jenis"];?></td>
          <td><?php echo $data["merek"];?></td>
          <td><?php echo $data["warna"];?></td>
          <td><?php echo $data["stok"];?></td>
          <td>Rp. <?php echo number_format($data["harga"]);?></td>
          <td>
            <a href="hapusData.php?uniq=<?php echo $data["id_barang"]; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash" title="hapus data"></i></a> | <a href="editData.php?id=<?php echo $data["id_barang"];?>"><i class="fa fa-edit" title="edit data"></i></a>
          </td>
        </tr>
            <?php $no++;?>
          <?php endwhile;?>
        <?php endif;?>
      </table>
      </div>
      <a href="tambahData.php" title="tambah data" class="tambah"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
    <footer>Relesead @2022 | Created with <i class="fa fa-heart"></i> by Andri Firmansyah</footer>
  </body>
</html>
