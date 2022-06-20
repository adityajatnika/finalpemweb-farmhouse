<?php
session_start();

if (isset($_SESSION['id_admin']) && isset($_SESSION['email'])) {

 ?>
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Notifications - Admin</title>

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
			<h3>Notifications</h3>

            <div class="row">
            <!--Start Alerts-->
			  <div class="col-12 col-md-12">
                <div class="card">

                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Tandai Sudah dibaca</button>

                        <div class="alert alert-success">
                            <div class="container">
                                <div class="alert-icon">
                                    <i class="las la-times">check</i>
                                </div>
                                <input type="checkbox">
                                <b>Success Alert:</b> Yuhuuu! You've got your $11.99 album from The Weeknd
                            </div>
                        </div>

                        <div class="alert alert-warning">
                             <div class="container">
                                 <div class="alert-icon">
                                    <i class="las la-times">warning</i>
                                </div>
                                <input type="checkbox">
                                 <b>Warning Alert:</b> Hey, it looks like you still have the "copyright ©  2015" in your footer. Please update it!
                            </div>
                        </div>

                        <div class="alert alert-danger">
                             <div class="container">
                                 <div class="alert-icon">
                                    <i class="las la-times">error_outline</i>
                                </div>
                                <input type="checkbox">
                                 <b>Error Alert:</b> Damn man! You screwed up the server this time. You should find a good excuse for your Boss...
                            </div>
                        </div>

                        <div class="alert alert-primary">
                            <div class="container">
                                <div class="alert-icon">
                                    <i class="las la-times">update</i>
                                </div>
                                <input type="checkbox">
                                <b>Primary Alert:</b> Good evening! You should upgrade your data today.
                            </div>
                        </div>

                        <div class="alert alert-primary">
                            <div class="container">
                                <div class="alert-icon">
                                    <i class="las la-times">update</i>
                                </div>
                                <input type="checkbox">
                                <b>Primary Alert:</b> Good evening! You should upgrade your data today.
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
                </div>
            <!--Start Alerts-->

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
