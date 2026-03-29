<html>
	<head>
		<title>Admin Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/jpg" href="NewAdmin/assets/img/Main.jpg"/>
		<link rel="Main.jpg" sizes="76x76" href="../assets/img/Main.jpg">
	  	<link rel="icon" type="image/jpg" href="../assets/img/Main.jpg">
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<?php include('function.php'); ?>
		<?php
			$_SESSION['loginstatus']="";
			if(isset($_POST["sbmt"]))
			{
				$cn=makeconnection();
				$s="select * from users where Username='" . $_POST["t1"] . "' and Pwd='" . $_POST["t2"] ."'";
				
				$q=mysqli_query($cn,$s);
				$r=mysqli_num_rows($q);
				$data=mysqli_fetch_array($q);
				mysqli_close($cn);
				if($r>0)
				{
					$_SESSION["Username"]= $_POST["t1"];
					$_SESSION["usertype"]=$data[2];
					$_SESSION['loginstatus']="yes";
					header("location:index.php");
				}
				else
				{
					echo "<script>alert('Invalid User Name or Password');</script>";
				}
			}
		?>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<div class="login100-form-title" style="background-image: url(bg-contact-us.jpg);">
						<span class="login100-form-title-1">
							Log In
						</span>
					</div>

					<form class="login100-form validate-form" method="post">
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Username</span>
							<input class="input100" type="text" name="t1" placeholder="Enter username">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
							<span class="label-input100">Password</span>
							<input class="input100" type="password" name="t2" placeholder="Enter password">
							<span class="focus-input100"></span>
						</div>

						<div class="container-login100-form-btn">
							<button name="sbmt" class="login100-form-btn" >
								Login
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="vendor/animsition/js/animsition.min.js"></script>
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
		<script src="vendor/countdowntime/countdowntime.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>