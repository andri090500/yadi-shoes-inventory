<?php
session_start();
// cek session
if(isset($_SESSION["admin"])){
  header("location:index.php");
  exit;
}
// admin
$admin = [
  "username" => "andri",
  "password" => "andri"
];

// cek login
if(isset($_POST["submit"])){
  // ambil data
  $username = $_POST["username"];
  $password = $_POST["password"];
  // cek username dan password
  if($username == $admin["username"] AND $password == $admin["password"]){
    // set session user
    $_SESSION["admin"] = $admin;
    // direct ke index 
    header("location:index.php");
    exit;
  }else{
    $loginGagal = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="asset/css/login.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="gambar">
      <h1>Yadi's shoes Penyimpanan</h1>
      <img src="asset/img/sepatu.png" alt="sepatu" />
    </div>
    <div class="pembungkus-form">
      <h4>Admin</h4>
      <div class="box-login">
        <form action="" method="post" id="form">
          <ul>
            <li><i class="fa fa-user"></i><label for="username">Username</label></li>
            <li><input type="text" name="username" id="username" autofocus required /></li>
            <li><i class="fa fa-lock"></i><label for="password">Password</label></li>
            <li><input type="password" name="password" id="password" required /></li>
            <li><button type="submit" name="submit">Login</button></li>
          </ul>
        </form>
      </div>
      <?php if(isset($loginGagal)):?>
        <div class="alert">username / password salah <i class="fa fa-close" title="close"></i></div>
      <?php endif;?>
    </div>
    <script src="js/login.js"></script>
  </body>
</html>
