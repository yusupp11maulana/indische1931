<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard - DWAdmin</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.css">
	<!-- Style CSS (White)-->
	<link rel="stylesheet" href="assets/css/White.css">
	<!-- Style CSS (Dark)-->
	<link rel="stylesheet" href="assets/css/Dark.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css">
	<!-- Icon LineAwesome CSS-->
	<link rel="stylesheet" href="assets/vendors/lineawesome/css/line-awesome.min.css">

</head>
<body>
  
  <!--Topbar -->
  <div class="topbar transition">
	<div class="bars">
		<button type="button" class="btn transition" id="sidebar-toggle">
			<i class="las la-bars"></i>
		</button>
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

					
					<p class="menu">Cafe</p>

					<li id="headingOne">
						<a href="blank-page.html" class="items">
							<i class="lar la-meh-blank"></i>
							<span>Order</span>
						</a>
					</li>

					<li>
						<a href="blank-page.html" class="items">
							<i class="lar la-meh-blank"></i>
							<span>Bill</span>
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

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-inbox icon-home bg-primary text-light"></i>
								</div>
								<div class="col-8">
									<p>Revenue</p>
									<h5>$65</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
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

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-chart-bar  icon-home bg-info text-light"></i>
								</div>
								<div class="col-8">
									<p>Sales</p>
									<h5>5500</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-id-card  icon-home bg-warning text-light"></i>
								</div>
								<div class="col-8">
									<p>Employes</p>
									<h5>256</h5>
								</div>
							</div>
						</div>
					</div>

				</div>
		
				<div class="col-md-6">
					<div class="card">
						<h5 class="card-header">Projects</h5>
						<div class="card-body">
							<div class="row mb-1">
								<div class="col-6 mt-4">
									Server Migration
								</div>
								<div class="col-6 mt-4 text-right">
									20%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
									Sales Tracking
								</div>
								<div class="col-6 text-right">
									40%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
									Customer Database
								</div>
								<div class="col-6 text-right">
									60%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
									Payout Details
								</div>
								<div class="col-6 text-right">
									80%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
									Account Setup
								</div>
								<div class="col-6 text-right">
									Complete!
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
		
					<div class="row">
						<div class="col-6">
							<div class="card bg-primary">
								<div class="card-body">
									<p>Primary</p>
									<p class="mb-0">#3B82F6</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card bg-success">
								<div class="card-body">
									<p>Success</p>
									<p class="mb-0">#10B981</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card bg-info">
								<div class="card-body">
									<p>Info</p>
									<p class="mb-0">#36B9CC</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card bg-warning">
								<div class="card-body">
									<p class="text-light">Warning</p>
									<p class="text-light mb-0">#F59E0B</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card bg-danger">
								<div class="card-body">
									<p>Danger</p>
									<p class="mb-0">#EF4444</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card bg-secondary">
								<div class="card-body">
									<p>Secondary</p>
									<p class="mb-0">#858796</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<h5 class="card-header">Illustrations</h5>
						<div class="card-body">
							<img src="assets/images/undraw_responsive_6c8s.svg" class="img-fluid p-5">
							<p class="mb-4">Add some quality, svg illustrations to your project courtesy of <a
									href="https://undraw.co" target="_blank">unDraw</a>, a constantly updated collection of beautiful
								svg images that you can use completely free and without attribution!</p>
		
							<a href="https://undraw.co" target="_blank">Browse Illustrations on unDraw →</a>
						</div>
					</div>
		
					<div class="card">
						<h5 class="card-header">
							Development Approach
						</h5>
						<div class="card-body">
							<p class="mb-3 mt-4">DWAdmin makes extensive use of Bootstrap 4 utility classes in order to reduce CSS
								bloat and poor page performance. Custom CSS classes are used to create custom components and custom
								utility classes.</p>
							<p>Before working with this theme, you should become familiar with the Bootstrap framework, especially
								the utility classes.</p>
						</div>
					</div>
				</div>
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

	<!-- Library Javascipt-->
	<script src="assets/vendors/bootstrap/js/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/js/script.js"></script>
 </body>
</html>