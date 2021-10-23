<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="text/css" href="admin.css">

</head>
<title>Admin</title>
<body>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="admin.html"> <img src="Image\logo.png" style="width: 100%; height: 100px;"></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="admin.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Customer Orders</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Stocks Orders <!--Edit-->
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="adminPO.html">Pending</a>
        <a class="dropdown-item" href="adminDO.html">Delivered</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Inventory <!--Edit-->
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="stock1.html">Beer</a>
        <a class="dropdown-item" href="stock2.html">Brandy</a>
        <a class="dropdown-item" href="stock3.html">Gin</a>
        <a class="dropdown-item" href="stock4.html">Rum</a>
        <a class="dropdown-item" href="stock5.html">Wine</a>
        <a class="dropdown-item" href="stock6.html">Whiskey</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Statistics <!--Edit-->
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="stat1.html">User Accounts</a>
        <a class="dropdown-item" href="stat2.html">Admin Accounts</a>
        <a class="dropdown-item" href="stat3.html">Sales</a>
        <a class="dropdown-item" href="stat4.html">Orders</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="adminlogin.html">Logout</a>
    </li>

    <li class="nav-item"><!--time-->
      <a class="nav-link" href="#">
      <script>

      function display_ct5() {
      var x = new Date()
      var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';

      var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
      x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
      document.getElementById('ct5').innerHTML = x1;
      display_c5();
       }
       function display_c5(){
      var refresh=1000; // Refresh rate in milli seconds
      mytime=setTimeout('display_ct5()',refresh)
      }
      display_c5()
      </script>

      <span id='ct5' > </span>
      </a></li>

   
  </ul>
</nav>

<div class="container mt-3">
  <div class="media border p-3">
<img src="image/img_avatar.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h2 style="color: white;">Welcome Back! Admin</h2>
      <p style="color: white;">Name of admin</p>
      </div>
 </div>
</div>

<div class="container-fluid p-3 my-3 bg-dark text-white">
  <h3	>Admin Home</h3>
  


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image\wine.jpg" alt="Los Angeles"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>Wines</h3>
        <p>100% made in the Philippines</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image\brandy.jpg" alt="Chicago"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>Brandy</h3>
        <p>100% made in the Philippines</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image\rum.jpg" alt="New York"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>rum</h3>
        <p>100% made in the Philippines</p>
      </div>   
    </div>
  </div>

</body>


</html>