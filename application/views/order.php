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
    Indische1931 Cafe - History
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
        <a class="navbar-brand" href="<?= base_url()?>customer">
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
            <a class="nav-link" href="<?= base_url()?>customer">
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
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="" target="_blank" data-original-title="Log Out Account" rel="nofollow">LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('./asset/img/indische/bg2.png');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Pemesanan Menu</h1>
            <h3>Segera Lakukan Pemesanan Menu</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised mb-5">
    <!-- Denah -->
      <div class="section">
        <div class="container text-center">
          <h2 class="title">Denah Kafe</h2>
          <img src="./asset/img/indische/denah.png" alt="" style="width: 40%">
        </div>
      </div>
    <!-- /Denah-->

    <!-- MENU -->
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="container">
            <div class="row"><h2 class="title">Menu Minuman</h2></div>
            <div class="row"><img src="./asset/img/indische/minuman.png" alt="" style="width: 80%"></div>
          </div>
        </div>
        <div class="col">
          <div class="container">
            <div class="row"><h2 class="title">Menu makanan</h2></div>
            <div class="row"><img src="./asset/img/indische/makanan.png" alt="" style="width: 80%"></div>
          </div>        
        </div>
      </div>
    </div>
    <!-- /Menu -->

    <!-- FORM Menu -->
    <form action="">
      <div class="container">
        <div id="inputs" class="ml-5 pl-5">
          <div class="row ml-5 pl-5">
            <div class="col-lg-4 col-sm-4 mt-4 ml-5">
              <div class="form-group">
                <select class="form-control pl-3" name="kode_produk">
                  <option disabled selected style="font-weight: bold; color: #8C6232">- Pilih Menu -</option>
                  <option disabled></option>
                  <option disabled style="font-weight: bold; color: #8C6232">COFFEE</option>
                  <option >Americano</option>
                  <option >Cappucino</option>
                  <option disabled></option>
                  <option disabled style="font-weight: bold; color: #8C6232">CRUNCHY CREAM</option>
                  <option >Cookies</option>
                  <option >Regal</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4">
              <div class="form-group">
                <label for="exampleInput1" class="bmd-label-floating">Total Pesanan</label>
                <input type="number" class="form-control" id="exampleInput1">
                <span class="bmd-help">Banyaknya orderan yang di pesan berupa angka</span>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4 mt-4">
              <div class="form-group">
                <button type="Submit" class="btn btn-info btn-sm">Tambahkan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Form Menu -->

    <!-- Form Transaksi -->
    <form action="">
      <div class="container">
        <div id="inputs" class="ml-5 pl-5">
          <div class="row ml-5 pl-5">
            <div class="col-lg-4 col-sm-4 mt-4 ml-5">
              <div class="form-group">
                <select class="form-control pl-3" name="kode_produk">
                  <option disabled selected style="font-weight: bold; color: #8C6232">- Pilih Meja -</option>
                  <option >Meja 1</option>
                  <option >Meja 2</option>
                  <option >Meja 3</option>
                  <option >Meja 4</option>
                  <option >Meja 5</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4 mt-4">
              <div class="form-group">
                <button type="Submit" class="btn btn-info btn-round">Order</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- /Form Transaksi -->

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