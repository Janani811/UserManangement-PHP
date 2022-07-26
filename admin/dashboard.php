<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Dashboard</title>
	<style type="text/css">
	.card
	{
		height: 200px;
		width:200px;
		margin:80px;
	}
	.card-header
	{
		font-size: 20px;
		text-align: center;
		color:white;
		font-family: cursive;
	}
   ul
  {
   list-style-type: none;
  }
   ul li a
    {
     
     color:blue;
     font-size: 20px;
     font-family: georgia;
     font-weight:bold;
    }
    ul li a:hover
    {
      color:red;
    }
    table
    {
      border:2px solid brown;
    }
    td
    {
      column-width: 250px;
    }
    tr:nth-child(even) 
    {
      background-color: #ffccee;
    }
	</style>
</head>
<body>
<div class="row">

 <div class="col-12" style="width:100%;">
 <nav class="navbar navbar-light " style="height:70px;width:1364px;background-color:darkblue">

  <a class="navbar-brand" href="#" style="color:white">
    <img src="images/a.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Admin
  </a>
  <button style="background-color:red;float:right"><a href="logout.php" style="color:white;text-decoration:none">LOGOUT</a></button>
 
  
</nav>
</div>

  <div class="col-2" style="background-color:pink;">
     <br>
    <ul>
  <li class="nav-item ">
        <a class="nav-link"  href="adminprofile.php">
        MY PROFILE
        </a>
    </li>
     <hr>
    <li class="nav-item active">
        <a class="nav-link"  href="dashboard.php">
         DASHBOARD
        </a>
    </li>

    <hr>
    <li class="nav-item ">
        <a class="nav-link"  href="alluserpage.php">
         ALL USERS
        </a>
    </li>

     <hr>
    <li class="nav-item ">
        <a class="nav-link"  href="adduserpage.php">
         ADD USER
        </a>
    </li>
     <hr>
    <li class="nav-item ">
        <a class="nav-link"  href="update_delete.php">
         UPDATE AND DELETE
        </a>
    </li>
     <hr>
    </ul>
 
    
  </div>
  <div class="col-10" style="background-color:snow white;height:900px;width:700px">
    <div id="dashbord">
<div id="card1" style="float:left;">
 <div class="card">
   <div class="card-header" style="background-color: red;">
     Number of Users
   </div>
   <div class="card-body">
   <center>
      <?php
      include('includes/database.php');
      $sql = "SELECT * FROM userdetails"; 
 
      $connStatus = $conn->query($sql); 
 
      $numberOfRows = mysqli_num_rows($connStatus); 
 
      echo $numberOfRows; 
      ?>
     </center>
   </div>
 </div>
 </div>
<div id="card2" style="float:left;">
 <div class="card">
   <div class="card-header" style="background-color: violet;">
     Number of Admin
   </div>
   <div class="card-body">
   <center>
      <?php
      include('includes/database.php');
      $sql = "SELECT * FROM admin"; 
 
      $connStatus = $conn->query($sql); 
 
      $numberOfRows = mysqli_num_rows($connStatus); 
 
      echo $numberOfRows; 
      ?>
      </center>
   </div>
 </div>
 </div>

<div id="card3" style="float:left;">
 <div class="card">
   <div class="card-header" style="background-color: darkblue;">
     Number of department
   </div>
   <div class="card-body">
   <center>
   <?php
   include('includes/database.php');
      $sql = "SELECT count(deptname) FROM department group by deptname"; 
 
      $connStatus = $conn->query($sql); 
 
      $numberOfRows = mysqli_num_rows($connStatus); 
 
      echo $numberOfRows; 
      ?>
      </center>
   </div>
 </div>
 </div>
  </div>
</div>


<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>