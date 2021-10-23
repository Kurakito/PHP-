<?php  



$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "royaldragon";
$con =  mysqli_connect($db_host, $db_user, $db_pass, $db_name);	

if(!$con)
{
	echo("Error description:" . mysqli_error($con));
	die("failed to connect!");
}
