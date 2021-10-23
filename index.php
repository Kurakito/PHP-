<?php 

session_start();

  include("connection.php");
  include("functions.php");

  $admin_data = check_admin($con);


?>
<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, 
</body>
</html>