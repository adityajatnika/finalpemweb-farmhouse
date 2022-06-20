 <?php
 session_start();

 if (isset($_SESSION['id_admin']) && isset($_SESSION['email'])) {

  ?>
<!--
menu :
Dashboard
Bulanan
User
-->
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard - Admin</title>

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
				<div class="theme-switch-wrapper">
						<label class="theme-switch" for="checkbox">
							<span>Dark mode</span>
							<input type="checkbox" id="checkbox"  title="Dark Or White"/>
							<div class="slider round"></div>
					  </label>
					</div>
				</li>

				<li>
					<a href="notifications.php" class="transition">
						<i class="las la-bell"></i>
						<span class="badge badge-danger notif">5</span>
					</a>
				</li>

			<li>
				<div class="dropdown">
					<div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
						<img src="assets/images/avatar/avatar-2.png" alt="Profile">
					</div>
					<div class="dropdown-menu" aria-labelledby="dropdownProfile">

						<a class="dropdown-item" href="profile.php">
							<i class="las la-user mr-2"></i> My Profile
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="signin.php">
							<i class="las la-sign-out-alt mr-2"></i> Sign Out
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
			<h2 style="font-weight: 700;" class="mb-0">FarmHouse<span style="font-weight: 500;">Admin</span></h2>
		</div>

		<div class="sidebar-items">
			<div class="accordion" id="sidebar-items">
				<ul>

					<p class="menu">Apps</p>

					<li>
						<a href="index.php" class="items">
							<i class="fa fa-tachometer-alt"></i>
							<span>Dashoard</span>
						</a>
					</li>
					<li>
						<a href="bulanan.php" class="items">
							<i class="fa la-file-alt"></i>
							<span>Bulanan</span>
						</a>
					</li>
					<li>
						<a href="user.php" class="items">
							<i class="fa la-user-alt"></i>
							<span>User</span>
						</a>
					</li>
					<li>
						<a href="statistik.php" class="items">
							<i class="fa fa-chart-line"></i>
							<span>Statistik</span>
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
									<i class="las la-person-booth icon-home bg-primary text-light"></i>
								</div>
								<div class="col-8">
									<p>Jumlah User</p>
									<h5>1.250</h5>
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
									<p>Jumlah Order</p>
									<h5>1.880</h5>
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
									<p>Pengunjung web</p>
									<h5>1.501.900</h5>
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
									<p>Administrator</p>
									<h5>5</h5>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-md-6">
					<div class="card">
						<h5 class="card-header">Statistik bulan ini</h5>
						<div class="card-body">
							<div class="row mb-1">
								<div class="col-6 mt-4">
									Order masuk
								</div>
								<div class="col-6 mt-4 text-right">
									35%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
									User baru
								</div>
								<div class="col-6 text-right">
									15%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
									Pemasukan
								</div>
								<div class="col-6 text-right">
									20%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="20"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="mt-4">
								<i><p>Last update 01-04-2021</p></i>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<h5 class="card-header">Pencapaian</h5>
						<div class="card-body">
							<img src="assets/images/undraw_poin_chart.svg" class="img-fluid p-5">
							<p class="mb-4">Halo Administrator, halaman admin ini digunakan sebagai pencatatan data user dengan visualisasi yang memudahkan administrator memantau perubahan yang terjadi pada website dan sebagai pelaporan pemasukan bagi farm house</p>
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
			&copy; 2021 All Right Reserved by Kelompok 12 - PEMWEB A Sistem Informasi
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
<?php
}else{
     header("Location: signin.php");
     exit();
}
 ?>
