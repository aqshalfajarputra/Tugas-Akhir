<?php
	session_start();
	include_once("connect.php");
	if (!isset($_SESSION['username'])) {
		header("location: login.php");
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
            <h1>Product List</h1>
            <span>You can edit or delete these product as you want</span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 box">
          <table>
            <tr class="head-table">
              <th>Product Name</th>
              <th>Product Price</th>
              <th>Action</th>
            </tr>
          	<?php
          	$i = 1;
          	$query = mysqli_query($connect, "SELECT * FROM tb_content");
          	while($data = mysqli_fetch_array($query)) { ?>
            <tr>
              <td><?php echo $data['p_name']; ?></td>
              <td><?php echo $data['p_price']; ?></td>
              <td><a href="edit_product.php?id=<?php echo $data['p_id']; ?>">Edit</a> | <a href="delete_product.php?id=<?php echo $data['p_id']; ?>">Delete</a></td>
            </tr>
          	<?php $i++; } ?>
          </table>
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
