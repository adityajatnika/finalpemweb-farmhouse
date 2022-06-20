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

	<title>Bulanan - Admin</title>

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
			<h3>Rincian Bulanan</h3>

			<form id="form_viewicm" class="mb-3" autocomplete="off" style="overflow:hidden;">
			<div class="row">
				<div class="form-group col-xs-6 col-md-3" >
				  <label for="month">Bulan :</label>
                  <select id="month" name="month" class="form-control bg-light">
                     <option disabled selected>- BULAN -</option>
                     <option value="1" >Januari</option>
                     <option value="2" >Februari</option>
                     <option value="3" >Maret</option>
                     <option value="4" >April</option>
                     <option value="5" >Mei</option>
                     <option value="6" >Juni</option>
                     <option value="7" >Juli</option>
                     <option value="8" >Agustus</option>
                     <option value="9" >September</option>
                     <option value="10" >Oktober</option>
                     <option value="11" >November</option>
                     <option value="12" >Desember</option>
                  </select>
              </div>

              <div class="form-group col-xs-6 col-md-3">
              	<label for="year">Tahun :</label>
                  <select id="year" name="year" class="form-control bg-light">
                     <option value="" disabled selected>- TAHUN -</option>
                     <option value="2019" >2019</option>
                     <option value="2020" >2020</option>
                     <option value="2021" >2021</option>
                     <option value="2022" >2022</option>
                     <option value="2023" >2023</option>
                                                            </select>
              </div>
              <div class="form-group col-xs-12 col-md-4 pt-4">
                 <button id="view_income" class="btn btn-primary mt-0"><i class="fa fa-angle-double-right"></i> SUBMIT</button>
                 <a href="bulanan.php" class="btn btn-danger"><i class="fa fa-eraser"></i> RESET</a>
              </div>
            </div>

            </form>
			<table class="table table-striped table-bordered" style="width:100%;overflow:auto;">
                <thead class="bg-primary">
                    <tr>
                        <th style="width:20px;text-align: center;">No.</th>
                        <th>Tahun</th>
                        <th>Bulan</th>
                        <th>Jumlah Transaksi</th>
                        <th>Total Pemasukan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td align="center">1.</td>
                      <td>2021</td>
                      <td>Januari</td>
                      <td>-</td>
                      <td>Rp. 0</td>
                      <td><a href="" data-target="#januari" data-toggle="modal"> <i class="fa fa-eye"></i> Detail</a></td>
                    </tr>
                    <tr>
                      <td align="center">2.</td>
                      <td>2021</td>
                      <td>Februari</td>
                      <td>-</td>
                      <td>Rp. 0</td>
                      <td><a href="" data-target="#januari" data-toggle="modal"> <i class="fa fa-eye"></i> Detail</a></td>
                    </tr>
                    <tr>
                      <td align="center">3.</td>
                      <td>2021</td>
                      <td>Maret</td>
                      <td>-</td>
                      <td>Rp. 0</td>
                      <td><a href="" data-target="#januari" data-toggle="modal"> <i class="fa fa-eye"></i> Detail</a></td>
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

<!-- Modal detail employee-->
<div class="modal fade" id="januari" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog " role="document" style="margin-top: 5%; margin-bottom: 5%;">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h4 class="modal-title" id="myModalLabel">Detail Bulanan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times; </span></button>
      </div>
      <div class="modal-body">
        <table class="table table-striped" style="width: 100%;">
                    <tr>
                      <td width="200px" style="font-weight: bold;">Bulan </th>
                      <td width="10px" style="font-weight: bold;"> : </td>
                      <td width="250px">Januari</td>
                    </tr>
                    <tr>
                      <td style="font-weight: bold;">Tahun</th>
                      <td style="font-weight: bold;"> : </td>
                      <td>2021</td>
                    </tr>
                    <tr>
                      <td style="font-weight: bold;">Jumlah Pembeli</th>
                      <td style="font-weight: bold;"> : </td>
                      <td>60</td>
                    </tr>
                    <tr>
                      <td style="font-weight: bold;">Jumlah Transaksi </th>
                      <td style="font-weight: bold;"> : </td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td style="font-weight: bold;">Tiket Terjual </th>
                      <td style="font-weight: bold;"> : </td>
                      <td>155</td>
                    </tr>
                    <tr>
                      <td style="font-weight: bold;">All In One </th>
                      <td style="font-weight: bold;"> : </td>
                      <td>50</td>
                    </tr>
                    <tr>
                      <td style="font-weight: bold;">Reguler 1 </th>
                      <td style="font-weight: bold;"> : </td>
                      <td>10</td>
                    </tr>
                    <tr>
                      <td style="font-weight: bold;">Reguler 2 </th>
                      <td style="font-weight: bold;"> : </td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <td style="font-weight: bold;">Reguler 3 </th>
                      <td style="font-weight: bold;"> : </td>
                      <td>75</td>
                    </tr>
                    <tr>
                      <td style="font-weight: bold;">Total Pemasukan </th>
                      <td style="font-weight: bold;"> : </td>
                      <td>Rp. 7.800.000</td>
                    </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm bg-danger" data-dismiss="modal"><i class="fa fa-close"></i>TUTUP</button>
      </div>
    </div>
  </div>
</div>

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
