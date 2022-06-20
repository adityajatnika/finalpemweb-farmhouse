
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

	<div class="auth-dark">
	<div class="theme-switch-wrapper">
			<label class="theme-switch" for="checkbox">
				<input type="checkbox" id="checkbox"  title="Dark Or White"/>
				<div class="slider round"></div>
		  </label>
	</div>
	</div>

	<div class="container">
		<div class="row vh-100 d-flex justify-content-center align-items-center auth my-4">
			<div class="col-md-7 col-lg-5">
				<div class="card">
					<div class="card-body">
						<h3 class="mb-5">SIGN UP</h3>
						<form action="signup.php" method="post">
							<div class="form-group">
								<input type="text" name="first_name" class="form-control" placeholder="First name">
							</div>
							<div class="form-group">
								<input type="text" name="last_name" class="form-control" placeholder="Last name">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" name="phone" class="form-control" placeholder="Phone">
							</div>
							<p class="px-5">Your password is 8-20 characters, includes on letter and one number</p>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<input type="password" name="confirm_password" class="form-control"
									placeholder="Confirm password">
							</div>
							<div class="form-group form-check text-left ml-2">
								<input type="checkbox" class="form-check-input" id="agree">
								<label class="form-check-label ml-2" for="agree">I agree to the <a href="">Terms of Service &
										Privacy Policy</a></label>
							</div>
							<div class="form-group">
                <input type="submit" name="submit" value="Create an account" class="btn btn-linear-primary btn-rounded">
								<!-- <a href="signin." class="btn btn-linear-primary btn-rounded">Create an account</a> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Library Javascipt-->
	<script src="assets/vendors/bootstrap/js/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/js/script.js"></script>
  <?php
  // Check If form submitted, insert form data into users table.
  if( isset($_POST['submit']) &&
  !empty($_POST['first_name']) &&
  !empty($_POST['password']) &&
  !empty($_POST['confirm_password']) &&
  !empty($_POST['email'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];


  // include database connection file
  include_once("config.php");

  // Insert user data into table
  $result = mysqli_query($mysqli, "INSERT INTO admin(f_nama, l_nama, phone, username, email, password) VALUES('$first_name','$last_name','$phone',null,'$email','$password')");

  // Show message when user added
  header("Location: signin.php");
  }
  else if( isset($_POST['submit'])){
    echo "<p align='center'>data anda kurang lengkap</p>";
  }
  ?>
 </body>
</html>
