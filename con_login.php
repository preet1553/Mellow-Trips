<?php
	$host = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "Travel";

	$con = mysqli_connect($host,$dbuser,$dbpass,$dbname);
	$sql = "select * from users";
	$result = mysqli_query($con,$sql);

	$row = mysqli_fetch_assoc($result);
	
	if($row)
	{
		header("Location: index.php");
	}
	else
	{
		header("Location: index1.php");
	}
?>