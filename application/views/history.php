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
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('./asset/img/indische/bg3.png');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Riwayat Pemesanan</h1>
            <h3>Pemesanan Yang Telah Terselesaikan</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised mb-5">
    <div class="section">
      <div class="container">
        <!-- Table -->
        <h3 class="mb-4">Tabel Riwayat Pemesanan</h3>
        <div class="table-responsive rounded">
          <table class="table align-items-center table-light bg-light">
            <thead align="center" class="thead-dark" id="thead-row">
              <tr>
                <th scope="col" class="sort" >ID Pesanan</th>
                <th scope="col" class="sort" >Tanggal Order</th>
                <th scope="col" class="sort" >Meja</th>
                <th scope="col" class="sort" >Jumlah Menu</th>
                <th scope="col" class="sort" >Total Pembayaran</th>
                <th scope="col" class="sort" >Keterangan</th>
                <th scope="col">Opsi</th>
              </tr>
            </thead>
            <tbody class="list">
                <tr align="center">
                  <td>Ord001</td>
                  <td>15/12/2020</td>
                  <td>20</td>
                  <td>3</td>
                  <td>Rp 50.000</td>
                  <td><span class="badge badge-success">Lunas</span></td>
                  <td><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#updateModal" type="button">
                      <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                      <span class="btn-inner--text">Edit</span>
                    </button>
                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#updateModal" type="button">
                      <span class="btn-inner--icon"><i class="fas fa-external-link-alt"></i></span>
                      <span class="btn-inner--text">View</span>
                    </button>
                  </td>
                </tr>
                <tr align="center">
                  <td>Ord002</td>
                  <td>15/12/2020</td>
                  <td>21</td>
                  <td>3</td>
                  <td>Rp 150.000</td>
                  <td><span class="badge badge-success">Lunas</span></td>
                  <td><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#updateModal" type="button">
                      <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                      <span class="btn-inner--text">Edit</span>
                    </button>
                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#updateModal" type="button">
                      <span class="btn-inner--icon"><i class="fas fa-external-link-alt"></i></span>
                      <span class="btn-inner--text">View</span>
                    </button>
                  </td>
                </tr>
            </tbody>
            
          </table>
        </div>
        <!-- /Table -->
      </div>
    </div>
    <!-- Footer -->
    <div class="section section-download" id="downloadSection" style="margin-top: -150px">
      <div class="container">
        <div class="sharing-area text-center">
          <div class="row justify-content-center">
            <h3>Thank you for supporting us!</h3>
          </div>
          <a id="twitter" class="btn btn-raised btn-twitter" href="https://twitter.com/CreativeTim" rel="nofollow">
            <i class="fa fa-twitter"></i>
            Tweet
          </a>
          <a id="facebook" class="btn btn-raised btn-facebook" href="https://www.facebook.com/CreativeTim" rel="nofollow">
            <i class="fa fa-facebook-square"></i>
            Facebook
          </a>
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