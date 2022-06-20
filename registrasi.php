<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi Akun</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="Gambar/icons/favicon1.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<!-- ICON -->
	<link rel="stylesheet" type="text/css" href="vendor/lineawesome/css/line-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/regis.css">
<!--===============================================================================================-->
<!-- NAVBAR -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>
<body>
	<!-- header -->
	<header>
		 <!-- header inner -->
		 <div id="header" class="header">
				<div id="white_header" class="header_white_section">
					 <div class="container-fluid">
							<div class="row">
								 <div class="col-md-12">
										<div class="header_information">
											 <ul>
													<li><img src="images/1.png" alt="#"/> Jl. Raya Lembang no.108</li>
													<li><img src="images/2.png" alt="#"/> +62  89860708361</li>
													<li><img src="images/3.png" alt="#"/> farmhouse@gmail.com</li>
													<li></li>
											 </ul>
										</div>
								 </div>
							</div>
					 </div>
				</div>
				<div class="container">
					 <div class="row">
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
								 <div class="full">
										<div class="center-desk">
											 <div class="logo"> <a href="index.php"><img src="images/logo2.png" width="70%" alt="#"></a> </div>
										</div>
								 </div>
							</div>
							<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
								 <div class="menu-area">
										<div class="limit-box">
											 <nav class="main-menu">
													<ul class="menu-area-main">
														 <li> <a href="index.php#home">Beranda</a> </li>
														 <li> <a href="index.php#about">Tentang Kami</a> </li>
														 <li><a href="index.php#demos">Galeri</a></li>
														 <li><a href="index.php#blog">Lokasi</a></li>
														 <li><a href="index.php#contact">Hubungi Kami</a></li>
														 <li><button class="fh5co-sub-ddown btn bg-light p-2 mt-2" style="border-radius: 5%;">Profil <i class="la la-arrow-down "></i></button>
														<ul class="fh5co-sub-menu">
															<li><a href="login.php" target="_blank">Login</a></li>
															<li><a href="biodata.php" target="_blank">Biodata</a></li>
															<li><a href="Riwayat.php" target="_blank">Riwayat Pesanan</a></li>
														</ul></li>
													</ul>
											 </nav>
										</div>
								 </div>
							</div>
					 </div>
				</div>
		 </div>
		 <!-- end header inner -->
	</header>
	<!-- end header -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login.php">
					<span class="login100-form-title p-b-34">
						Registrasi Akun
					</span>

					<span class="span-label">Email</span>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-1" data-validate="Type user name">

						<input id="first-name" class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<span class="span-label">Password</span>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-1" data-validate="Type password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<span class="span-label">Konfirmasi Password</span>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-1" data-validate="Type password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="row" style="width: 100%">
						<div class="col-md-6 col-12">
							<span class="span-label">Nama Depan</span>
							<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-1">
							<input class="input100" type="text" name="first-name" placeholder="Nama depan">
							<span class="focus-input100"></span>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<span class="span-label">Nama Belakang</span>
							<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-1">
							<input class="input100" type="text" name="last-name" placeholder="Nama belakang">
							<span class="focus-input100"></span>
							</div>
						</div>
					</div>

					<span class="span-label">Nomor HP</span>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-1">
						<input class="input100" type="text" name="noHP" placeholder="Nomor Handphone">
						<span class="focus-input100"></span>
					</div>

					<span class="span-label">Tanggal Lahir</span>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-1">
						<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Lanjutkan
						</button>
					</div>

					<div class="w-full text-center p-t-27">
						<span class="txt1">
							Sudah punya akun?
						</span>
						<a href="login.php" class="txt2">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<!-- footer -->
      <footer>
         <div id="contact" class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <ul class="location_icon">
                        <li> <a href="https://www.facebook.com/farmhouselembangbdg/"><img src="icon/facebook.png"></a></li>
                        <li> <a href="https://twitter.com/farmhouse_bdg?lang=en"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="https://www.instagram.com/farmhouselembang/"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>HUBUNGI KAMI</h3>
                        <span>Jl. Raya Lembang no.108 <br>Gudangkahuripan,<br>
                        Lembang, Kabupaten Bandung<br>
                        085860708361</span>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>ADDITIONAL LINKS</h3>
                        <ul class="link">
                           <li> <a href="#about">Tentang Farmhouse</a></li>
                           <li> <a href="#">Beranda</a></li>
                           <li> <a href="#demos">Galeri</a</li>
                           <li> <a href="#testimonial-carousel">News</a></li>
                           <li> <a href="login.php">Profil</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3> Kontak </h3>
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input class="Newsletter" placeholder="Name" type="text">
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input class="Newsletter" placeholder="Email" type="text">
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <textarea class="textarea" placeholder="comment" type="text">Comment</textarea>
                           </div>
                        </div>
                        <button class="Subscribe">Submit</button>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <p>Copyright 2021 All Right Reserved By <a href="https://html.design/">kelomok 12 with html.design</a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
<!-- end footer -->


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

	<!-- SCROLL FIX NAVBAR -->
  <script type="text/javascript">
  $(document).ready(function(){
    var fixed = $("#header");
    var white = $("#white_header");

    $(document).on("scroll", function() {
      // alert($(document).scrollTop() + " px");
    if ($(document).scrollTop() > 50) {
      white.hide();
      fixed.addClass("scroll-fix");
      $("body").css("padding-top", "120px" );
    } else {
      fixed.removeClass("scroll-fix");
      white.show();
      $("body").css("padding-top", "0" );
    }
    })
  });
  </script>

</body>
</html>
