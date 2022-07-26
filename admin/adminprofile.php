
<?php
session_start();
$emailid=$_SESSION["emailid"];
echo "<script>alert('$emailid');</script>";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
  <title>Admin Profile Page</title>
  <style type="text/css">
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
    <li class="nav-item  active">
        <a class="nav-link"  href="adminprofile.php">
        MY PROFILE
        </a>
    </li>
     <hr>
    <li class="nav-item">
        <a class="nav-link"  href="dashboard.php">
         DASHBOARD
        </a>
    </li>

     <hr>
    <li class="nav-item">
        <a class="nav-link"  href="alluser.php">
         ALL USERS
        </a>
    </li>
     <hr>

    <li class="nav-item">
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
<div class="profile" style="width:60%;height:700px;margin-left:180px">
<br>
<br><br>
<center>
<h2 style="color:purple;font-family:GEORGIA;">MY PROFILE</h2>
<br>

 <?php
include('includes/database.php');
 
$result = mysqli_query($conn,"SELECT * FROM admin where emailid='$emailid'");

echo "<table border='1' cellpadding='20px' style='margin-left:100px'>";
while($row = mysqli_fetch_array($result))
{
        
        echo "<tr><td><b>USER NAME</b> </td>"."<td>". $row['username']."</td></tr>";
        echo "<tr><td><b>FIRST NAME</b> </td>"."<td>". $row['firstname']."</td></tr>";
        echo "<tr><td><b>LAST NAME</b> </td>"."<td>".$row['lastname']."</td></tr>";
        echo "<tr><td><b>EMAIL ID</b> </td>"."<td>".$row['emailid']."</td></tr>";
        echo "<tr><td><b>AGE</b> </td>"."<td>".$row['age']."</td></tr>";
        echo "<tr><td><b>MOBILE NUMBER</b> </td>"."<td>".$row['mobilenumber']."</td></tr>";
        
        echo "<tr><td><b>ADDRESS</b> </td>"."<td>".$row['address']."</td></tr>";
}
echo "</table>";
mysqli_close($conn);
?>
 </center>   
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