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

	<title>User - Admin</title>

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
							<i class="fas la-file-alt"></i>
							<span>Bulanan</span>
						</a>
					</li>
					<li>
						<a href="user.php" class="items">
							<i class="fas la-user-alt"></i>
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
			<h3>User</h3>
			<div class="head mb-3" style="text-align: left;">
				<input type="search" class="input-search form-control input-sm bg-light mr-3" placeholder="Search">
				<label><a href="" class="btn bg-primary"><i class="fa fa-long-arrow-alt-right"></i></a></label>
			</div>
			<table class="table table-striped table-bordered" style="width:100%;overflow:auto;">
                <thead class="bg-primary">
                    <tr>
                        <th style="width:20px;text-align: center;">No.</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Nama Lengkap</th>
                        <th>Nomor HP</th>
                        <th>Tanggal Lahir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td align="center">1.</td>
                      <td>agusini@gmail.com</td>
                      <td>***</td>
                      <td>Agus Wahyudi</td>
                      <td>081234939</td>
                      <td>10-10-1990</td>
                      <td><button class="btn btn-sm bg-success"><i class="la la-pencil-alt"></i>EDIT</button>
                      	<button class="btn btn-sm bg-danger"><i class="la la-eraser"></i>HAPUS</button>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">2.</td>
                      <td>herijon@gmail.com</td>
                      <td>***</td>
                      <td>Heri Jono</td>
                      <td>0812929388</td>
                      <td>20-10-1990</td>
                      <td><button class="btn btn-sm bg-success"><i class="la la-pencil-alt"></i>EDIT</button>
                      	<button class="btn btn-sm bg-danger"><i class="la la-eraser"></i>HAPUS</button>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">3.</td>
                      <td>aansodikin@gmail.com</td>
                      <td>***</td>
                      <td>Aan Sodikin</td>
                      <td>08787829290</td>
                      <td>30-10-1995</td>
                      <td><button class="btn btn-sm bg-success"><i class="la la-pencil-alt"></i>EDIT</button>
                      	<button class="btn btn-sm bg-danger"><i class="la la-eraser"></i>HAPUS</button>
                      </td>
                    </tr>
                </tbody>
            </table>
			<nav aria-label="Page navigation example">
			  <ul class="pagination justify-content-end">
			    <li class="page-item disabled">
			      <a class="page-link" href="#" tabindex="-1">Previous</a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#">Next</a>
			    </li>
			  </ul>
			</nav>

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
