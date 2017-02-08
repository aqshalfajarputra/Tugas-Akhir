<?php
require_once 'connect.php';

// Simpan di Folder Gambar

if ($_POST) {
  if (isset($_POST['username']) && $_POST['username'] != "") {
    if (isset($_POST['password']) && $_POST['password'] != "") {
        if (isset($_POST['nama']) && $_POST['nama'] != "") {
          if (isset($_POST['email']) && $_POST['email'] != "") {
            if (isset($_POST['konfirmasi']) && $_POST['konfirmasi'] != "") {

                      // Variabel ANYAARR!!!!!!!!!!!!!!
      $username = $_POST['username'];
      $password = $_POST['password'];
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $konfirmasi = $_POST['konfirmasi'];

      if ($password == $konfirmasi) {

      $query = "INSERT INTO tb_admin
                    (aduser,adpw,adname,ademail)
                    VALUES
                    ('$username','$password','$nama','$email')
                    ";
          $result = mysqli_query($connect, $query);

        if ($result) {
          header("location: product_list.php");
          }else {
          echo "GAGAL DAFTAR, kapok kon";
          }
        }else {
          echo "password ndak sama";
        }
        }else {
          echo "rata uan gurung diisi";
          }
      }else {
        echo "asal smp mu ngendi?";
        }
    }else {
      echo "nomer teleponmu piro?";
      }
  }else {
    echo "Gak due omah a?";
    }
} else {
  echo "jeneng mu nang ndi le?";
  }
}

?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/tambahan.css">
  </head>

  <body>


<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <div class="row">
    <h1>Registration Admin Access</h1>
    <div class="col-md-12">
      <center><img src="../img/logo.png" alt="" class="logo-besar"> </center>
    </div>
  </div>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Registrasi</h1>
    <form action="" method="post">
      <div class="input-container">
       <input type="text" name="username" id="username" required="reqired">
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" id="password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
         <div class="input-container">
        <input type="text" name="nama" id="nama" required="required"/>
        <label for="Password">Nama</label>
        <div class="bar"></div>
      </div>

         <div class="input-container">
        <input type="text" name="email" id="email"  required="required"/>
        <label for="Password">Email</label>
        <div class="bar"></div>
        </div>

         <div class="input-container">
        </label> <input type="password" name="konfirmasi"id="Repeat Password" required="required"/>
        <label for="Konfirmasi Password">Konfirmasi Password</label>
        <div class="bar"></div>
      </div>

      <div class="button-container">
           <input type="submit" name="button" id="button" value="Registrasi" >
      </div>
       </div>
        </div>

    </form>
<!-- Portfolio<a id="portfolio" href="http://andytran.me/" title="View my portfolio!">-->
    <i class="fa fa-link"></i></a>
<!-- CodePen<a id="codepen" href="http://codepen.io/andytran/" title="Follow me!">-->
    <i class="fa fa-codepen"></i></a>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>

  </body>
</html>
