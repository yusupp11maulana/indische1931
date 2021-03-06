<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="./asset/img/indische/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Indische1931 Cafe - Beranda
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./asset/css/material-kit.css?v=2.0.7" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./asset/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg " color-on-scroll="0" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url()?>landing">
          Indische1931 Cafe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>landing">
              <i class="material-icons">home</i> Beranda
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>order">
              <i class="material-icons">assignment</i> Order Now 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>history">
              <i class="material-icons">history</i> History 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/indische1931" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li class="nav-item bg-warning" style="border-radius: 60px; ">
            <?php if($ktp == ""){?>
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?= base_url()?>login" data-original-title="Login Account" rel="nofollow">Login</a>
            <?php } else{?>
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?= base_url()?>login/logout" data-original-title="Log Out Account" rel="nofollow">Logout</a>
            <?php }?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('./asset/img/indische/bg.png');">
    <div class="container" style="margin-top: -100px">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Indische1931 Cafe</h1>
            <h3>Coffee Roastery HahaHihi</h3>
            <a class="nav-link" href="<?= base_url()?>order">
              <button class="btn btn-success btn-round mt-3">
                <i class="material-icons">assignment</i> Order Now
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised mb-5" style="margin-top: -200px">
    <!--         carousel  -->
    <div class="section" id="carousel">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mr-auto ml-auto">
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="./asset/img/indische/carousel1.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Indische1931 Cafe, Jl. Brigjend Katamso No.179 Sidoarjo
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./asset/img/indische/carousel2.png" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Indische1931 Cafe, Jl. Brigjend Katamso No.179 Sidoarjo
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./asset/img/indische/carousel3.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Indische1931 Cafe, Jl. Brigjend Katamso No.179 Sidoarjo
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./asset/img/indische/carousel4.png" alt="Fourth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Indische1931 Cafe, Jl. Brigjend Katamso No.179 Sidoarjo
                      </h4>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Carousel Card -->
          </div>
        </div>
      </div>
    </div>
    <!--         end carousel -->
    <div class="section" style="margin-top: -100px">
      <div class="container text-center">
        <div class="row">
          <div class="container">
            <h3>Promo Special</h3>
          </div>
        </div>
        <div class="row">
          <div class="container">
          <img src="./asset/img/indische/promo.png" style="width: 30%;">
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div class="section section-download" id="downloadSection" style="margin-top: -150px">
      <div class="container">
        <div class="sharing-area text-center">
          <div class="row justify-content-center">
            <h3>Thank you for supporting us!</h3>
          </div>
          <a id="instagram" class="btn btn-raised btn-instagram" href="https://www.instagram.com/indische1931" rel="nofollow">
            <i class="fa fa-instagram"></i>
            Instagram
          </a>
          <a id="github" href="https://indischegroup.com/" target="_blank" class="btn btn-raised btn-github" rel="nofollow">
            <i class="fa fa-chrome"></i>
            Indischegroup
          </a>
        </div>
      </div>
    </div>
    <!-- Footer -->
  </div>
  <!--   Core JS Files   -->
  <script src="./asset/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./asset/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./asset/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./asset/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./asset/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./asset/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./asset/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>