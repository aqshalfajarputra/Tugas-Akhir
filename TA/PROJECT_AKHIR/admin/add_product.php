<?php
	session_start();
	include_once("connect.php");
	if (!isset($_SESSION['username'])) {
		header("location: login.php");
	}
	$hasil = "";
	if (isset($_POST['submit'])) {
		$nama = stripslashes($_POST['nama']);
		$harga = stripslashes($_POST['harga']);
		$info 	 = stripslashes($_POST['info']);
		$id = rand(1, 50);
		$label = stripslashes($_POST['label']);

    $namafile = $_FILES['gambar']['name'];
    $type = $_FILES['gambar']['type'];
    $size = $_FILES['gambar']['size'];
    $tmp = $_FILES['gambar']['tmp_name'];

		if (empty($nama) || empty($harga)) {
			$hasil = "Gagal !, Masih Ada Yang Kosong.";
		} else {

      if ($size > 40000 ) {
							$hasil = "Gagal !, File Gambar Terlalu Besar.";
      }

            if ($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/jpg') {
							$simpan = mysqli_query($connect, "INSERT INTO tb_content VALUES ('$id','$nama','$harga','$namafile','$info','$label')");
							if ($simpan) {
								move_uploaded_file($tmp, "../img/posting/".$namafile);
								$hasil = "<br>Berhasil !, Product Telah Ditambahkan. Cek Disini.";
							} else {
								$hasil = "gagal";
							}
          	} else {
							$hasil = "Gagal !, Ekstensi File Tidak Mendukung.";
            }
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" href="../js/jquery.js"> </script>
    <!-- Custom CSS -->
    <link href="../css/tambahan.css" rel="stylesheet">
    <link href="../css/coba.css" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
</head>

<!--_________________ Ini adalah Category Menu ______________________  -->
<body>
  <section id="header">
    <div class="container">
        <div class="container-fluid">
          <div class="row box">
            <img src="../img/logo.png" class="logo-normal" alt="">
          </div>
        </div>
    </div>
  </section>

  <section id="category" class="bg-light-gray jarak">
      <div class="container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="nav nav-pills nav-stacked">
            <li class="active"><a href=""><h4>Admin Page</h4></a></li>
            <li><a href="add_product.php" class="box2" >Add Product</a></li>
            <li><a href="product_list.php" class="box2">Product List</a></li>
            <li><a href="logout.php" class="box2">Logout</a></li>
          </div>
        </div>

<!--_________________ Ini adalah AKHIR Category Menu ______________________  -->

    <div class="col-md-9">
      <div class="row">
        <div class="col-md-12 box title">
            <h1>Add Product</h1>
            <span>Please fill this form to add a new Product</span>
            <?php echo $hasil; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 box">
            <form class="form-panel" action="" method="post" enctype="multipart/form-data">
      			  <ul class="kontak">
      			    <li>
      			      <input type="text" name="nama" value="" class="input-with-text" placeholder="Nama Produk">
      			    </li>
      			    <li>
      			      <input type="text" name="harga" value="" class="input-with-text" placeholder="Harga Produk">
      			    </li>
                <li>
      			      <input type="text" name="label" value="" class="input-with-text" placeholder="Label, Ex: Vintage">
      			    </li>
      			    <li>
      			      <textarea name="info" rows="8" cols="40" class="input-with-text" placeholder="Isi informasi"></textarea>
      			    </li>
      			    <li>
      			      <input type="file" name="gambar" class="input-with-text">
      			    </li>
      			    <li>
      			      <input type="submit" name="submit" class="input-with-text" value="Submit" class="">
      			    </li>
      			  </ul>
      			</form>
        </div>
      </div>
    </div>
    </div>
  </div>

      </div>
  </section>
  <div class="container">

      <hr>

      <!-- Footer -->
      <footer>
          <div class="row">
              <div class="col-lg-12">
                  <p>Copyright &copy; Your Website 2014</p>
              </div>
          </div>
      </footer>

  </div>
  <!-- /.container -->

  <!-- jQuery -->
  <script src="../js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="../js/bootstrap.min.js"></script>

  </body>

  </html>
