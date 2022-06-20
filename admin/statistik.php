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

	<title>Statistik - Admin</title>

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
						<a href="index.php" class="items">
							<i class="fa fa-user-alt"></i>
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
			<h3>Statistik</h3>

			<div class="card">
				<div class="card-body">
					<canvas id="diagram1">

					</canvas>
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
	<script src="assets/vendors/charts/chart.min.js"></script>
	<!-- <script src="assets/js/chart.js"></script> -->
	<script src="assets/js/script.js"></script>

	<script>
	// let isiData = [10820100, 9232458, 8291330, 9222502, 9000430, 800610, 11000488, 800232, 12889990, 13100800, 14900800, 10700500];
	// let acak = shuffle(isiData);
	var ctx = document.getElementById("diagram1").getContext('2d');
	var myChart = new Chart(ctx, {
	  type: 'line',
	  data: {
	    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
	    datasets: [{
	      label: '2019',
	      data: [10.8, 9.2, 8.9, 11.2, 10.1, 11.5, 12.7, 12.0, 14.5, 10.9, 11.2, 12.8],
	      borderWidth: 2,
	      backgroundColor: 'rgba(0,0,0,0)',
	      borderColor: '#6777ef',
	      borderWidth: 2.5,
	      pointBackgroundColor: '#ffffff',
	      pointRadius: 4
	    },
	    {
	      label: '2020',
	      data: [9.2, 8.9, 11.2, 10.1, 10.9, 11.2, 12.8, 10.8,  11.5, 12.7, 12.0, 14.5],
	      borderWidth: 2,
	      backgroundColor: 'rgba(0,0,0,0)',
	      borderColor: '#02e328',
	      borderWidth: 2.5,
	      pointBackgroundColor: '#ffffff',
	      pointRadius: 4
	    },
	    {
	      label: '2021',
	      data: [12.8, 10.8, 12.7, 12.0, 14.5, 10.9, 11.2,9.2, 8.9, 11.2, 10.1, 11.5],
	      borderWidth: 2,
	      backgroundColor: 'rgba(0,0,0,0)',
	      borderColor: '#eb2f00',
	      borderWidth: 2.5,
	      pointBackgroundColor: '#ffffff',
	      pointRadius: 4
	    }],

	  },
	  options: {
	    legend: {
	      display: true
	    },
	    title:{
	    	display: true,
	    	text: 'Statistik Pendapatan per Bulan (dalam juta)',
	    	fontSize: 22
	    },
	    scales: {
	      yAxes: [{
	        gridLines: {
	          drawBorder: false,
	          color: '#f2f2f2',
	        },
	        ticks: {
	          beginAtZero: true,
	          stepSize: 2
	        }
	      }],
	      xAxes: [{
	        ticks: {
	          display: true
	        },
	        gridLines: {
	          display: false
	        }
	      }]
	    },
	  }
	});
	</script>
 </body>
</html>
<?php
}else{
     header("Location: signin.php");
     exit();
}
 ?>
