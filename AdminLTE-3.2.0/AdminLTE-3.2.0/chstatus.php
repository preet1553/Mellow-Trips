<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	$host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "travel";
    $con = mysqli_connect($host,$dbuser,$dbpass,$dbname);
    $sql = "update enquiry set statusfield='Confirm' where enquiryid='" . $_GET["eid"] . "'";
    mysqli_query($con,$sql);
    mysqli_close($con);
    header("location:Enquiry.php");

?>
</body>
</html>