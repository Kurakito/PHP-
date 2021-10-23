<?php 
session_start();

  include("connection.php");
  include("functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $admin_name = $_POST['aduser'];
    $adpassword = $_POST['adpass'];

    if(!empty($admin_name) && !empty($adpassword) && !is_numeric($admin_name))
    {

      //read from database
      $query = "select * from admindb where Username = '$admin_name' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {

          $user_data = mysqli_fetch_assoc($result);
          
          if($admin_data['password'] === $password)
          {

            $_SESSION['ID'] = $admin_data['ID'];
            header("Location: index.php");
            die;
          }
        }
      }
      
      echo "wrong username or password!";
    }else
    {
      echo "wrong username or password!";
    }
  }

?>


<!DOCTYPE html> 
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>

	<div class="container p-3 my-3 border bg-dark">
   <center> 

<h2 style="color: white;">Admin Log-in</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="" style="color: white;">Username: </label>
      <input type="text" placeholder="Enter username" name="aduser">
    </div>
    <div class="form-group">
      <label for="" style="color: white;">Password:</label>
      <input type="password" placeholder="Enter password" name="adpass">
    </div>
   <input id="button" type="submit" value="Login" class="btn btn-outline-primary">
  </form>
    </center>
  </div>
</body>
</html>
