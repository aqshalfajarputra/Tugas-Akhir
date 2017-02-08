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
  <div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
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

<!-- *** NAVBAR END *** -->
<!--________________________ Vintage Parallax START ____________________________-->
  <div class="container-fluid parallax3">
    <div class="row">
      <div class="col-md-12 judul2 ">
      <span ><h1 style="font-size:70px;">Thank You Very Much</h1></span>
      <p style="font-size:30px"> We always serve you with our best</p>
      </div>
    </div>
  </div>
  <!--________________________ Vintage Parallax END ____________________________-->

<!--________________________ About START ____________________________-->

<section id="team" class="bg-light-gray judul modal-style">
    <div class="container-fluid ">
        <div class="row box2">
            <div class="col-lg-12r">
                <h2 class="section-heading">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row box2">
          <br>
          <br>
            <div class="col-sm-4">

                    <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                    <h4>Aqshal Fajar Putra</h4>
                    <p class="text-muted">Backend Maker and Designer</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>

            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                    <h4>Vira Melliana A.</h4>
                    <p class="text-muted">Content Maketing</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                    <h4>M. Miftahul Iqbal Albana</h4>
                    <p class="text-muted">Program Builder</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--________________________ About STOP ____________________________-->

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
