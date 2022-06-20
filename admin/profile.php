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

	<title>Profile - Admin</title>

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
			<h3>Profile</h3>

                <div class="card overflow-hidden">
                    <div class="row no-gutters row-bordered row-border-light">
                      <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                          <a class="list-group-item list-group-item-action active1" data-toggle="list" href="#account-general">General</a>
                          <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="tab-content">
                          <div class="tab-pane fade active show" id="account-general">
                            <p class="mt-4 text-center">Information : </p>

                            <div class="card-body media align-items-center">
                              <img src="assets/images/avatar/avatar-1.png" alt="" class="d-block ui-w-80">
                              <div class="media-body ml-4">
                                <label class="btn btn-outline-primary">
                                  Upload new photo
                                  <input type="file" class="account-settings-fileinput">
                                </label> &nbsp;
                              </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                              <div class="form-group">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control mb-1" value="<?php $pisah = explode("@", $_SESSION['email']); echo $pisah[0]?>">
                              </div>
                              <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" value="<?php echo $_SESSION['f_nama']." ".$_SESSION['l_nama']; ?>">
                              </div>
                              <div class="form-group">
                                <label class="form-label">E-mail</label>
                                <input type="text" class="form-control mb-1" value="<?php echo $_SESSION['email']; ?>">
                              </div>

                            </div>
                          </div>

                          <div class="tab-pane fade" id="account-change-password">
                            <p class="mt-4 text-center">Change Password : </p>

                            <div class="card-body pb-2">

                              <div class="form-group">
                                <label class="form-label">Current password</label>
                                <input type="password" class="form-control">
                              </div>

                              <div class="form-group">
                                <label class="form-label">New password</label>
                                <input type="password" class="form-control">
                              </div>

                              <div class="form-group">
                                <label class="form-label">Repeat new password</label>
                                <input type="password" class="form-control">
                              </div>


                            <div class="text-right mt-3">
                                <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
                            </div>

                            </div>
                          </div>


                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            </div>
			<!--End Start Profile-->

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
