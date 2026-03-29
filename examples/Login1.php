<?php 
  session_start();
?>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/login/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
		<?php
				$_SESSION['loginstatus']="";
				if(isset($_POST["sbmt"]))
				{
					$host = "localhost";
          $dbuser = "root";
          $dbpass = "";
          $dbname = "travel";
          $con = mysqli_connect($host,$dbuser,$dbpass,$dbname);
          $sql = "select * from users where Username='" . $_POST["t1"] . "' and Pwd='" . $_POST["t2"] ."'";
          $q=mysqli_query($con,$sql);
          $r=mysqli_num_rows($q);
					$data=mysqli_fetch_array($q);
					mysqli_close($con);
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

		<form method="POST"></form>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center"></h3>
		      	<form action="con_login.php" method="POST" class="signin-form">


		      		<div class="form-group">
		      			<input type="text" class="form-control" name="t1" placeholder="Username" required pattern="[a-zA-z _]{1,50}" title="Please Enter Only Characters between 1 to 50 for User Name">
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="t2" placeholder="Password" required pattern="[a-zA-z0-9]{1,10}" title="Please Enter Only Characters between 1 to 10 for Password"0>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="sbmt" value="Sign In">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

