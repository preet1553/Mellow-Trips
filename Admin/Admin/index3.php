<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style2.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
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
<form method="post">
  <div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
    <h2>Please Log In</h2>
    <input style="border-radius:15px;" type="text" name="t1" placeholder="Username"/>
    <input style="border-radius:15px;" type="password" name="t2" placeholder="Password"/>
    <button name="sbmt" style="border-radius:8px;">Login</button>
  </div>
</div>
</form>
<!-- partial -->
  <script src='https://codepen.io/banik/pen/3f837b2f0085b5125112fc455941ea94.js'></script>
</body>
</html>