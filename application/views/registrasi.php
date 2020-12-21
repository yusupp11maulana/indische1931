<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Indische1931 - Registrasi</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Style CSS (White)-->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/White.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/fontawesome/css/all.css">
	<!-- Icon LineAwesome CSS-->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/lineawesome/css/line-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- ICON WEB -->
	<link rel="icon" type="image/png" href="./asset/img/indische/logo.png">

</head>

<body>
    <div class="container mt-5" >
        <div class="card" style="border-radius: 10px">
            <div class="row mt-3">
                <div class="col-md-6">
                    <h2 class="text-right" style="color: #D0BC9E">CREATE</h2>
                </div>
                <div class="col-md-6">
                    <h2 class="text-left"style="color: #8C6232">ACCOUNT</h2>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row align-items-center mb-4">
                        <div class="col-md-6">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark" ><i class="fas fa-envelope fa-1x "></i></div>
                                </div>
                                <input type="email" class="form-control border border-dark" id="" name="" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark"><i class="fas fa-key fa-1x"></i></div>
                                </div>
                                <input type="password" class="form-control border border-dark" id="" name="" placeholder="Passoword">
                            </div>
                        </div>
                    </div>

                    <div class="form-row align-items-center mb-4">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark"><i class="fas fa-align-left fa-1x"></i></div>
                                </div>
                                <input type="text" class="form-control border border-dark" id="" name="" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark"><i class="fas fa-street-view fa-1x"></i></div>
                                </div>
                                <input type="text" class="form-control border border-dark" id="" name="" placeholder="Alamat">
                            </div>
                        </div>
                    </div>

                    <div class="form-row align-items-center mb-4">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark"><i class="fas fa-id-card fa-1x"></i></div>
                                </div>
                                <input type="text" class="form-control border border-dark" id="" name="" placeholder="No KTP">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark"><i class="fas fa-calendar-day fa-1x"></i></div>
                                </div>
                                <input type="date" class="form-control border border-dark text-dark" id="" name="" placeholder="Tanggal Lahir" title="Tanggal Lahir">
                            </div>
                        </div>
                    </div>

                    <div class="form-row align-items-center mb-4">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark"><i class="fas fa-phone-alt fa-1x"></i></div>
                                </div>
                                <input type="text" class="form-control border border-dark" id="" name="" placeholder="Telepon">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark" for="inputGroupSelect01"><i class="fas fa-venus-mars fa-1x"></i></div>
                                </div>
                                <select class="custom-select border border-dark text-dark" id="inputGroupSelect01" name="">
                                    <option disabled selected class="text-dark">Jenis Kelamin</option>
                                    <option class="text-dark">Laki-laki</option>
                                    <option class="text-dark">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="<?= base_url()?>login"><button type="button" class="btn btn-outline-dark">SAVE</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

