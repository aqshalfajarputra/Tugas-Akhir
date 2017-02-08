<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AVI</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" href="js/jquery.js"> </script>
    <!-- Custom CSS -->
    <link href="css/tambahan.css" rel="stylesheet">
    <link href="css/coba.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>

<body>
  <div class="navbar navbar-default" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                <img src="img/logo.png" alt="Logo" class="hidden-xs logo-normal">
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
                    <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs"></span>
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

<!-- *** NAVBAR END *** -->
    <!--- Ini Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/vintage.jpg" alt="Image">
      <div class="carousel-caption">
        <h3>Sell $</h3>
        <p>Money Money.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/Office.jpg" alt="Image">
      <div class="carousel-caption">
        <h3>More Sell $</h3>
        <p>Lorem ipsum...</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- Akhir Carousel -->

<!--________________________ Adventages START ____________________________-->
    <section class="ad">

    <div class="container-fluid">

        <div class="row space">
          <?php
              $adTitle = array('Best Quality','Universal Payment','Lot of Discount','Best Price','Mobile Support','Fast Delivery',);
              $adInfo = array('Serve our best quality product','Universal currency all over the world','Discount event every week that can satisfy your pleassure','You can checkout that we have the best price ever','Mobile payment make your day','We will serve you with our fastest delevery', );
              $adImg = array('badge-1.png','exchange.png','percentage.png','price-tag.png','smartphone.png','truck.png',);
          for ($i=0; $i<count($adTitle) ; $i++) { ?>
          <div class="col-md-4">
              <img src="img/<?php echo $adImg[$i]; ?>" class="img-responsive img-center-fix" alt="">

              <h3 style="text-align:center"><?php echo $adTitle[$i]; ?></h3>
              <p class="text-muted" style="text-align:center"><?php echo $adInfo[$i]; ?></p>


          </div>
          <?php } ?>
        </div>

    </div>
  </section>
<!--____________________________ Adventages END ___________________________________-->

<!--________________________ Vintage Parallax START ____________________________-->
  <div class="container-fluid parallax">
    <div class="row">
      <div class="col-md-12 judul ">
      <span ><h1 style="font-size:50px;">Vintage Area</h1></span>
      <button  type="button" name="button" class="btn btn-lg btn-template-transparent-black"><a class="sip" href="vintage.php">View More</a></button>
      </div>
    </div>
  </div>
  <!--________________________ Vintage Parallax END ____________________________-->

  <!--________________________ Vintage Collection START ____________________________-->
  <div class="container-fluid judul">
    <div class="row">
      <div class="col-md-12">
        <?php
          include_once("connect.php");
          $i = 1;
          $query = mysqli_query($connect, "SELECT * FROM tb_content WHERE p_label='Vintage' || 'vintage'");
          $jumlah = mysqli_num_rows($query);
          if ($jumlah == 0) { ?>
            <h1>Tidak Ada Data</h1>
            <?php }

      		while($data = mysqli_fetch_assoc($query)) {
             ?>
        <div class="col-md-3 col-sm-3">

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
                      <p class="modal-style info">
                        <?php echo $data['p_info']; ?>
                      </p>
                      <a href=""><button type="button" name="button"><i class="fa fa-2x fa-cart-plus"></i> Buy !</button></a>
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

  <!--________________________ Vintage Collection END ____________________________-->

  <!--________________________ Office parallax START ____________________________-->

  <div class="container-fluid parallax2">
    <div class="row">
      <div class="col-md-12 judul ">
      <span ><h1 style="font-size:50px;">Office Area</h1></span>
      <button type="button" name="button" class="btn btn-lg btn-template-transparent-black"><a class="sip" href="office.php">View More</a></button>
      </div>
    </div>
  </div>

  <!--________________________ Office parallax END ____________________________-->

  <!--________________________ Office Content START ____________________________-->
  <div class="container-fluid judul">
    <div class="row">
      <div class="col-md-12">
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
        <div class="col-md-3 col-sm-3">

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


  <!--________________________ Office Content END ____________________________-->

  <!--________________________ GET Inspired START ____________________________-->
<div class="container bottom">

  <div class="col-md-12 box2 center2">
    <h1 class="">Get Inspired</h1>
    <h3 class="text-muted">More excited with these Collection</h3>
  </div>
  <div class="row">

    <div class="col-md-12">

  <!--- Ini Carousel -->
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel2" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <div class="item active">
    <img src="img/Untitled-2.jpg" alt="Image">
  </div>

  <div class="item">
    <img src="img/Untitled-7.jpg" alt="Image">
  </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
  </a>
  </div>
  <!-- Akhir Carousel -->
</div>
</div>
</div>


  <!--________________________ GET Inspired END ____________________________-->

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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
