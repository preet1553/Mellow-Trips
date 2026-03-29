<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="Main.jpg" sizes="76x76" href="../assets/img/Main.jpg">
  <link rel="icon" type="image/jpg" href="../assets/img/Main.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Mellow Trips Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
        <?php
      if($_SESSION['loginstatus']=="")
      {
        header("location:index2.php");
      }
    ?>

    <?php include('function.php'); ?>
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <img height="100px" src="Travelnew-removebg.png">
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <?php if($_SESSION["usertype"]=="Admin")
          {?>
          <li>
            <a href="AddUser.php">
              <p style="padding-left: 60px;font-size: 13px;">Add Admin</p>
            </a>
          </li>
          <li>
            <a href="UpdteUser.php">
              <p style="padding-left: 50px;font-size: 13px;">Update Admin</p>
            </a>
          </li>
          <li>
            <a href="DelteUser.php">
              <p style="padding-left: 50px;font-size: 13px;">Delete Admin</p>
            </a>
          </li>
          <?php }?>
          <li>
            <a href="AddCatgory.php">
              <p style="padding-left: 46px;font-size: 13px;">Add Category</p>
            </a>
          </li>
          <?php if($_SESSION["usertype"]=="Admin")
          {?>
          <li>
            <a href="UpdteCatgory.php">
              <p style="padding-left: 37px;font-size: 13px;">Update Category</p>
            </a>
          </li>
          <li>
            <a href="DelteCatgory.php">
              <p style="padding-left: 37px;font-size: 13px;">Delete Category</p>
            </a>
          </li>
          <?php }?>
          <li>
            <a href="ViewCatgory.php">
              <p style="padding-left: 45px;font-size: 13px;">View Category</p>
            </a>
          </li>
          <li>
            <a href="Addsubcatgory.php">
              <p style="padding-left: 37px;font-size: 13px;">Add Subcategory</p>
            </a>
          </li>
          <?php if($_SESSION["usertype"]=="Admin")
          {?>
          <li>
            <a href="UpdteSubcatgory.php">
              <p style="padding-left: 26px;font-size: 13px;">Update Subcategory</p>
            </a>
          </li>
          <li>
            <a href="DelteSubcatgory.php">
              <p style="padding-left: 26px;font-size: 13px;">Delete Subcategory</p>
            </a>
          </li>
          <?php }?>
          <li>
            <a href="ViewSubcatgory.php">
              <p style="padding-left: 35px;font-size: 13px;">View Subcategory</p>
            </a>
          </li>
          <li class="active">
            <a href="AddPackge.php">
              <p style="padding-left: 54px;font-size: 13px;">Add Package</p>
            </a>
          </li>
          <?php if($_SESSION["usertype"]=="Admin")
          {?>
          <li>
            <a href="UpdtePackge.php">
              <p style="padding-left: 42px;font-size: 13px;">Update Package</p>
            </a>
          </li>
          <li>
            <a href="DeltePackge.php">
              <p style="padding-left: 42px;font-size: 13px;">Delete Package</p>
            </a>
          </li>
          <?php }?>
          <li>
            <a href="ViewPackge.php">
              <p style="padding-left: 50px;font-size: 13px;">View Package</p>
            </a>
          </li>
          <li>
            <a href="AddAdvrtice.php">
              <p style="padding-left: 32px;font-size: 13px;">Add Advertisement</p>
            </a>
          </li>
          <?php if($_SESSION["usertype"]=="Admin")
          {?>
          <li>
            <a href="DelteAdvrtice.php">
              <p style="padding-left: 23px;font-size: 13px;">Delete Advertisement</p>
            </a>
          </li>
          <?php }?>
          <li>
            <a href="ViewAdvrtice.php">
              <p style="padding-left: 32px;font-size: 13px;">View Advertisement</p>
            </a>
          </li>
          <li>
            <a href="Viewenqury.php">
              <p style="padding-left: 55px;font-size: 13px;">View Enquiry</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="">Add Package</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form style="margin-top: 20px;">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav" style="margin-top: 20px;">
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/Travel/" target="_blank">
                  <p style="font-size: 11px;">
                    View Website
                  </p>
                </a>
              </li>
              <li class="nav-item" style="padding-top:6px;text-decoration: none;">
                  <p>
                    <a href="logout.php" onclick="javascript:window.open('logout.php')">Logout</a>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               
              <form method="post" enctype="multipart/form-data">
                <table border="0" width="400px" height="250px" align="center" class="tableshadow">
                  <tr><td colspan="2" class="toptd"><h4>Add Package</h4> </td></tr>
                      <tr><td class="lefttxt">Package Name</td><td><input type="text" name="t1" required pattern="[a-zA-z _]{3,50}" title="Please Enter Only Characters between 3 to 50 for Package Name" /></td></tr>
                  <tr><td class="lefttxt">Select Category</td><td><select name="t2" required><option value="">Select</option>

                  <?php
                      $host = "localhost";
                      $dbuser = "root";
                      $dbpass = "";
                      $dbname = "travel";
                      $con = mysqli_connect($host,$dbuser,$dbpass,$dbname);
                      $sql = "select * from category";
                      $result = mysqli_query($con,$sql);
                      $r=mysqli_num_rows($result);

                  while($data=mysqli_fetch_array($result))
                  {
                  if(isset($_POST["show"])&& $data[0]==$_POST["t2"])
                    {
                        echo "<option value=$data[0] selected='selected'>$data[1]</option>";
                    }
                    else
                    {
                      echo "<option value=$data[0]>$data[1]</option>";
                    }
                  }

                  ?>

                  </select>
                  <input type="submit" value="Show" name="show" formnovalidate/>

                  <tr><td class="lefttxt">Select Subcategory</td><td><select name="t3" required/><option value="">Select</option>

                  <?php
                      $host = "localhost";
                      $dbuser = "root";
                      $dbpass = "";
                      $dbname = "travel";
                      $con = mysqli_connect($host,$dbuser,$dbpass,$dbname);
                      $sql = "select * from subcategory";
                      $result = mysqli_query($con,$sql);
                      $r=mysqli_num_rows($result);

                  while($data=mysqli_fetch_array($result))
                  {
                    if(isset($_POST["show"]))
                    {
                      if($data[2]==$_POST["t2"])
                      {
                        echo"<option value=$data[0] >$data[1]</option>";
                      }
                      else
                      {
                        //  echo "<option value=$data[0]>$data[1]</option>";
                      }
                    }
                  }

                  ?>

                  </select>

                  <tr><td class="lefttxt">Package Price</td><td><input type="text" name="t8" /></td></tr>
                  <tr><td class="lefttxt">Upload Pic1</td><td><input type="file" name="t4" /></td></tr>
                  <tr><td class="lefttxt">Upload Pic2</td><td><input type="file" name="t5" /></td></tr>
                  <tr><td class="lefttxt">Upload Pic3</td><td><input type="file" name="t6" /></td></tr>
                  <tr><td class="lefttxt">Details</td><td><textarea name="t7"></textarea></td></tr>

                  <tr><td>&nbsp;</td><td ><input type="submit" value="Save" name="sbmt" /></td></tr>
                </table>
              </form>
              
              <?php
                if(isset($_POST["sbmt"]))
                {
                  $host = "localhost";
                  $dbuser = "root";
                  $dbpass = "";
                  $dbname = "travel";
                  $con = mysqli_connect($host,$dbuser,$dbpass,$dbname);
                  $sql = "select * from package";

                  $f1=0;
                  $f2=0;
                  $f3=0;
                  
                  
                  $target_dir = "packimages/";
                  //t4
                  $target_file = $target_dir.($_FILES["t4"]["name"]);
                  $uploadok = 1;
                  $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
                  //check if image file is a actual image or fake image
                  $check=getimagesize($_FILES["t4"]["tmp_name"]);
                  if($check!==false) 
                  {
                    //echo "file is an image - ". $check["mime"]. ".";

                    $uploadok = 1;

                  }

                  else
                  {
                    echo "file is not an image.";
                    $uploadok=0;
                  }
                  
                  
                  //check if file already exists
                  // if(file_exists($target_file))
                  // {
                  //   echo "sorry,file already exists.";
                  //   $uploadok=0;
                  // }
                  
                  //check file size
                  if($_FILES["t4"]["size"]>500000)
                  {
                    echo "sorry, your file is too large.";
                    $uploadok=0;
                  }
                  
                  
                  //aloow certain file formats
                  if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif")
                  {
                    echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
                    $uploadok=0;
                  }
                  else
                  {
                    if(move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file)){
                      $f1=1;
                  } 
                  else
                  {
                      echo "sorry there was an error uploading your file.";
                  }
                }
                  
                  
                  //t5
                  $target_file = $target_dir.basename($_FILES["t5"]["name"]);
                  $uploadok = 1;
                  $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
                  //check if image file is a actual image or fake image
                  $check=getimagesize($_FILES["t5"]["tmp_name"]);
                  if($check!==false) 
                  {
                    //echo "file is an image - ". $check["mime"]. ".";
                    $uploadok = 1;
                  }
                  else
                  {
                    echo "file is not an image.";
                    $uploadok=0;
                  }
                  
                  
                  //check if file already exists
                  /*if(file_exists($target_file))
                  {
                    echo "sorry,file already exists.";
                    $uploadok=0;
                  }*/
                  
                  //check file size
                  if($_FILES["t5"]["size"]>500000)
                  {
                    echo "sorry, your file is too large.";
                    $uploadok=0;
                  }
                  
                  
                  //aloow certain file formats
                  if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif")
                  {
                    echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
                    $uploadok=0;
                  }
                  else
                  {
                    if(move_uploaded_file($_FILES["t5"]["tmp_name"], $target_file)){
                      $f2=1;
                  } 
                  else
                  {
                      echo "sorry there was an error uploading your file.";
                  }
                }
                  //t6
                  $target_file = $target_dir.basename($_FILES["t6"]["name"]);
                  $uploadok = 1;
                  $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
                  //check if image file is a actual image or fake image
                  $check=getimagesize($_FILES["t6"]["tmp_name"]);
                  if($check!==false) 
                  {
                    //echo "file is an image - ". $check["mime"]. ".";
                    $uploadok = 1;
                  }
                  else
                  {
                    echo "file is not an image.";
                    $uploadok=0;
                  }
                  
                  
                  //check if file already exists
                  // if(file_exists($target_file))
                  // {
                  //   echo "sorry,file already exists.";
                  //   $uploadok=0;
                  // }
                  
                  //check file size
                  /*if($_FILES["t6"]["size"]>500000)
                  {
                    echo "sorry, your file is too large.";
                    $uploadok=0;
                  }*/
                  
                  
                  //aloow certain file formats
                  if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif")
                  {
                    echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
                    $uploadok=0;
                  }
                  else
                  {
                    if(move_uploaded_file($_FILES["t6"]["tmp_name"], $target_file)){
                      $f3=1;
                  } 
                  else
                  {
                      echo "sorry there was an error uploading your file.";
                  }
                }
                  
                    if($f1>0&& $f2>0&&$f3>0)
                    {
                  
                  $sql="insert into package(packname,category,subcategory,packprice,pic1,pic2,pic3,detail) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] ."','". $_POST["t8"] . "','" . basename($_FILES["t4"]["name"]) . "','" . basename($_FILES["t5"]["name"]) . "','" . basename($_FILES["t6"]["name"]) . "','" . $_POST["t7"] ."')";
                  mysqli_query($con,$sql);
                  mysqli_close($con);
                  echo "<script>alert('Record Save');</script>";
                    }
                  
                    
              }
              ?>

      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="">
                  Mellow Trips
                </a>
              </li>
              <li>
                <a href="">
                  About Us
                </a>
              </li>
              <li>
                <a href="">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="">Mellow Trips</a>. Coded by <a href="">Mellow Trips</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>