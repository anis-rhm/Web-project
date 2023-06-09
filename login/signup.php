<!DOCTYPE html>
<html lang="en">

<head>
	<title>Malabis</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link href='https://unpkg.com/css.gg@2.0.0/icons/css/profile.css' rel='stylesheet'>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link href='https://unpkg.com/css.gg@2.0.0/icons/css/phone.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<?php
	session_start();
	?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="../actions/sign-up-action.php">
					<?php
					if (isset($_GET['error'])) {
						echo "<h2 style='color: red;' class='text-center'>" . htmlentities(urldecode($_GET['error'])) . "</h2>";
					}
					?>
					<span class="login100-form-title">
						Member Signup
					</span>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="text" name="user_name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="gg-profile"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="user_address" placeholder="Address" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa-sharp fa-solid fa-house"></i>>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="user_phone" placeholder="Phone number" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="gg-phone"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="user_email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="user_pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="user_pass_conf" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="save" href="../actions/sign-up-action.php" class="login100-form-btn ">
							Sign up
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="./login.php">
							Alread have an account? Login!
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>