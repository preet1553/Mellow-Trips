<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login form</title>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"><link rel="stylesheet" href="./style1.css">

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
<form class="login" method="post">
  <input type="text"name="t1" placeholder="Username">
  <input type="password" name="t2" placeholder="Password">
  <button name="sbmt">Login</button>
</form>
</body>
</html>