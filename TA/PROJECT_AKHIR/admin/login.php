<?php
	session_start();
	if(isset($_SESSION['username'])){
		header("location: add_product.php");
	}

	require_once "connect.php";

	if(isset($_POST['submit'])){
		$query = 'SELECT * FROM tb_admin WHERE aduser="'.$_POST['username'].'" && adpw="'.$_POST['password'].'"';
		$result = mysqli_query($connect, $query);
		if($result){
			if(mysqli_num_rows($result) > 0){
				$_SESSION['username'] = $_POST['username'];
				header("location: add_product.php");
			} else {
				echo '<script>alert("Login gagal!")</script>';
			}
		} else {
			echo '<script>alert("Login gagal!")</script>';
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login | Admin AVI</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/tambahan.css">
	</head>
	<body>
  <div class="pen-title">
    <div class="row">
      <h1>Login to Access Admin Page</h1>
      <div class="col-md-12">
        <center><img src="../img/logo.png" alt="" class="logo-besar"> </center>
      </div>
    </div>
  </div>
  <br>
  <div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="" method="post">
      <div class="input-container">
      <input type="text" id="username" name="username" autofocus value="" required />
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="password" name="password" autofocus value="" required />
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
         <input type="submit" name="submit" value="LOGIN" class="btn btn-block btn-primary">
      </div>
    </form>
  </div>

  </div>

    </form>
	</body>
</html>
