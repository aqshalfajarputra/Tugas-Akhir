<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Office Suit</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" href="js/jquery.js"> </script>
    <!-- Custom CSS -->
    <link href="css/tambahan.css" rel="stylesheet">
    <link href="css/coba.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
  <div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                <img src="img/logo.png" alt="Obaju logo" class="hidden-xs logo-normal">
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
                <a class="btn btn-default navbar-toggle" href="basket.html">
                    <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

          <ul class="nav navbar-nav navbar-left">
              <li class="active"><a href="index.php">Home</a>
              </li>
              <li class="dropdown ">
                  <a href="" id="d1" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" aria-hashpopup="true" aria-expanded="true">Content <b class="caret"></b></a>
                  <ul class="dropdown-menu" aria-labelledby="d1">
                    <li><a href="vintage.php">Vintage</a></li>
                    <li><a href="office.php">Office Suit</a></li>
                    <li><a href="all.php">All-Content</a></li>
                  </ul>
              </li>

              <li class="dropdown">
                  <a href="" id="d2" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"  aria-hashpopup="true" aria-expanded="true">Member Area <b class="caret"></b></a>
                  <ul class="dropdown-menu" aria-labelledby="d1">
                    <li><a href="admin/register.php">Register Admin</a></li>
                    <li><a href="admin/login.php">Login Admin</a></li>
                  </ul>
              </li>

              <li class="">
                  <a href="about.php" >About</a>

              </li>
          </ul>

        </div>
        <!--/.nav-collapse -->

        <div class="navbar-buttons">

            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">items in cart</span></a>
            </div>
            <!--/.nav-collapse -->

            <div class="navbar-collapse collapse right" id="search-not-mobile">
                <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

        </div>

        <div class="collapse clearfix" id="search">

            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">

                      <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

                    </span>
                </div>
            </form>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->

  </div>
</div>
<br>
<!-- ________________ NAVBAR END ___________________________ -->


      <!--_________________ Ini adalah Category Menu ______________________  -->

        <section id="category" class="bg-light-gray jarak">
            <div class="container-fluid">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <div class="nav nav-pills nav-stacked ">
                  <li class="active"><a href=""><h4>Categories</h4></a></li>
                  <li class="box2"><a href="vintage.php">Vintage</a></li>
                  <li class="box2"><a href="office.php">Office</a></li>
                  <li class="box2"><a href="all.php">All-Content</a></li>
                </div>
              </div>

      <!--_________________ Ini adalah AKHIR Category Menu ______________________  -->

        <div class="col-md-9">
            <div class="row">
              <div class="col-md-12 box title">
                  <h1>Office</h1>
                  <span>Get a bost self confidence in workout</span>
                  <br>
                  <br>
              </div>
            </div>
              <div class="row">
                <div class="col-md-12 ">
                  <?php
                    include_once("connect.php");
                    $i = 1;
                    $query = mysqli_query($connect, "SELECT * FROM tb_content WHERE p_label='Office' || 'office'");
                    $jumlah = mysqli_num_rows($query);
                    if ($jumlah == 0) { ?>
                      <h1>Tidak Ada Data</h1>
                      <?php }

                		while($data = mysqli_fetch_assoc($query)) {
                       ?>
                  <div class="col-md-4 col-sm-4">

                        <a href="#" class="thumbnail " data-toggle="modal" data-target="#mymodal<?php echo $i;?>">
                          <img src="img/posting/<?php echo $data['p_img']; ?>" class="img-responsive content-home" alt="">

                              <h4 class="text-primary"><?php echo $data['p_name']; ?></h4>
                              <p class="text-muted"><?php echo $data['p_price']; ?></p>

                        </a>

                        <div class="modal fade modal-style" id="mymodal<?php echo $i;?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3><?php echo $data['p_name']; ?></h3>
                              </div>

                              <div class="modal-body"  style="margin-left: 85px">
                                <img src="img/posting/<?php echo $data['p_img'];?>">
                              </div>

                              <div class="modal-footer">
                                <button type="button" class="btn" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <?php $i++; } ?>
                              </div>
            </div>
          </div>
        </div>
      </div>

            </div>
        </section>

        <!--________________________ FOOTER START ____________________________-->
        <footer id="footer">
                    <div class="container">
                        <div class="col-md-3 col-sm-6">
                            <h4 class="uye">About us</h4>

                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                            <hr>

                            <h4 class="uye">Join our monthly newsletter</h4>

                            <form>
                                <div class="input-group">

                                    <input type="text" class="form-control">

                                    <span class="input-group-btn">

                                <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>

                            </span>

                                </div>
                                <!-- /input-group -->
                            </form>

                            <hr class="hidden-md hidden-lg hidden-sm">

                        </div>
                        <!-- /.col-md-3 -->

                        <div class="col-md-3 col-sm-6">

                            <h4 class="uye">Content</h4>
                            <ul>
                              <li>Vintage</li>
                              <li>Office Suit</li>
                              <li>All Content</li>
                            </ul>


                        </div>
                        <!-- /.col-md-3 -->

                        <div class="col-md-3 col-sm-6">

                            <h4 class="uye">Contact</h4>

                            <p><strong>Universal Ltd.</strong>
                                <br>13/25 New Avenue
                                <br>Newtown upon River
                                <br>45Y 73J
                                <br>England
                                <br>
                                <strong>Great Britain</strong>
                            </p>
                              <a href="contact.html">Go to contact page</a>


                        </div>
                        <!-- /.col-md-3 -->



                        <div class="col-md-3 col-sm-6">

                            <h4 class="uye">User Section</h4>
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                                </li>
                                <li><a href="register.html">Regiter</a>
                                </li>
                            </ul>

                        </div>
                        <!-- /.col-md-3 -->
                    </div>
                    <!-- /.container -->
                </footer>

                <div id="copyright">
                          <div class="container">
                              <div class="col-md-6">
                                  <p class="pull-left">© 2016 AVI Production, Ltd.</p>

                              </div>

                          </div>
                      </div>    <!-- /.container -->

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
