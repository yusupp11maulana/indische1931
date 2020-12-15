<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard - Bar</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.css">
	<!-- Style CSS (White)-->
	<link rel="stylesheet" href="assets/css/White.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css">
	<!-- Icon LineAwesome CSS-->
	<link rel="stylesheet" href="assets/vendors/lineawesome/css/line-awesome.min.css">
	 <!-- Argon CSS -->
    <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
    <script type="text/javascript" src="assets/js/digitalDate.js"></script>

</head>
<body onload="initClock()">
  
  <!--Topbar -->
	<div class="topbar transition bg-warning">
		<div class="bars">
			<button type="button" class="btn transition" id="sidebar-toggle">
				<i class="las la-bars"></i>
			</button>
		</div>
		<div style="left: 0; text-align: left;" class="datetime btn btn-gray10 text-white">
			<div class="date" style="padding-top: 3%">
				<span id="dayname">Day</span>,
				<span id="daynum">00</span>
				<span id="month">Month</span>
				<span id="year">Year</span>
			</div>
			<div class="time">
				<span id="hour">00</span>:
				<span id="minutes">00</span>:
				<span id="seconds">00</span>
				<span id="period">AM</span>
			</div>
		</div>
		<div class="menu">
			<ul>
				<li>
					<div class="dropdown">
						<div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<img src="assets/images/avatar/avatar-2.png" alt="Profile">
						</div>
						<div class="dropdown-menu" aria-labelledby="dropdownProfile">
							
							<a class="dropdown-item" href="profile.html">
								<i class="las la-user mr-2"></i> My Profile
							</a>					 
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="signin.html">
								<i class="las la-sign-out-alt mr-2"></i> Log Out
							</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<!--Sidebar-->
	<div class="sidebar transition overlay-scrollbars">
		<div class="logo">
			<h4 style="font-weight: 500;" class="mb-0">Indishe 1931 Cafe</h4>
		</div>

		<div class="sidebar-items">
			<div class="accordion" id="sidebar-items">
				<ul>

					<p class="menu">Apps</p>

					<li>
						<a href="base_url/bar" class="items">
							<i class="fa fa-tachometer-alt"></i>
							<span>Dashoard</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="sidebar-overlay"></div>


	<!--Content Start-->
	<div class="content transition">
		<div class="container-fluid dashboard">
			<h3>Dashboard</h3>
		
			<div class="row">
			<!-- TOP CONTENT -->
				<div class="col-md-6 col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-clipboard-list icon-home bg-success text-light"></i>
								</div>
								<div class="col-8">
									<p>Orders</p>
									<h5>3000</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-hamburger icon-home bg-primary text-light"></i>
								</div>
								<div class="col-8">
									<p>Foods</p>
									<h5>100</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-coffee  icon-home bg-info text-light"></i>
								</div>
								<div class="col-8">
									<p>Drinks</p>
									<h5>100</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- /TOP CONTENT -->

			<!-- Main CONTENT -->
				<div class="col-lg-12">
					<div class="card">
						<h5 class="card-header">DETAIL ORDERS DRINKS</h5>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead align="center" class="thead-dark" id="thead-row">
										<tr>
											<th scope="col" class="sort" data-sort="name">ID Pesanan</th>
											<th scope="col" class="sort" data-sort="name">Nama List</th>
											<th scope="col" class="sort" data-sort="budget">Tanggal Order</th>
											<th scope="col" class="sort" data-sort="status">Meja</th>
											<th scope="col" class="sort" data-sort="status">Jumlah Minuman</th>
										</tr>
									</thead>
									<tbody class="list">
											<tr align="center">
												<td>Ord001</td>
												<td>Bima</td>
												<td>15/12/2020</td>
												<td>3</td>
												<td>2</td>
												<td><button class="btn btn-icon btn-success" data-toggle="modal" data-target="#updateModal" type="button">
														<span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
														<span class="btn-inner--text">Edit</span>
													</button>
													<button class="btn btn-icon btn-info" data-toggle="modal" data-target="#updateModal" type="button">
														<span class="btn-inner--icon"><i class="las la-terminal"></i></span>
														<span class="btn-inner--text">View</span>
													</button>
												</td>
											</tr>
									</tbody>
									
								</table>
							</div>
						</div>
					</div>
				</div>

			<!-- /Main CONTENT -->
			
			</div>
		
		</div>

	</div>

	<!-- Footer -->
	<div class="footer transition">
		<hr>
		<p>
			&copy; 2020 All Right Reserved by <a href="#" target="_blank">DWAdmin</a>
		</p>
	</div>

	<!-- Loader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	
	<div class="loader-overlay"></div>

	<!-- Argon Scripts -->
    <script type="text/javascript">
        function updateClock() {
            var now = new Date();
            var dname = now.getDay(),
                mo = now.getMonth(),
                dnum = now.getDate(),
                yr = now.getFullYear(),
                hou = now.getHours(),
                min = now.getMinutes(),
                sec = now.getSeconds(),
                pe = "AM";

            if (hou >= 12) {
                pe = "PM";
            }
            if (hou == 0) {
                hou = 12;
            }
            if (hou > 12) {
                hou = hou - 12;
            }

            Number.prototype.pad = function(digits) {
                for (var n = this.toString(); n.length < digits; n = 0 + n);
                return n;
            }

            var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            var week = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
            var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
            var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
            for (var i = 0; i < ids.length; i++)
                document.getElementById(ids[i]).firstChild.nodeValue = values[i];
        }

        function initClock() {
            updateClock();
            window.setInterval("updateClock()", 1);
        }
    </script>
	<!-- /Argon Scripts -->
	<!-- Library Javascipt-->
	<script src="assets/vendors/bootstrap/js/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/js/script.js"></script>
 </body>
</html>