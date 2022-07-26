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
  <title>User Profile</title>
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
<div class="header" style="width:100%;">
 <nav class="navbar navbar-light " style="height:70px;width:1364px;background-color:darkblue">

  <a class="navbar-brand" href="#" style="color:white">
    <img src="images/businessman.png" width="30" height="30" class="d-inline-block align-top" alt="">
    User
  </a>
  <button style="background-color:red;float:right"><a href="userlogout.php" style="color:white;text-decoration:none">LOGOUT</a></button>
 
  
</nav>
</div>
<div class="profile" style="width:60%;height:700px;margin-left:180px">
<br>
<br><br>
<center>
<h2 style="color:purple;font-family:GEORGIA;margin-left:60px">MY PROFILE</h2>
<br>

 <?php
include('database.php');
$result=mysqli_query($conn,"select * from userdetails as u join department as d on u.uid=d.did where emailid='$emailid'");
echo "<table border='1' cellpadding='20px' style='margin-left:100px'>";

while($row = mysqli_fetch_array($result))
{
        
        echo "<tr><td><b>USER NAME</b> </td>"."<td>". $row['username']."</td></tr>";
        echo "<tr><td><b>FIRST NAME</b> </td>"."<td>". $row['firstname']."</td></tr>";
        echo "<tr><td><b>LAST NAME</b> </td>"."<td>".$row['lastname']."</td></tr>";
        echo "<tr><td><b>EMAIL ID</b> </td>"."<td>".$row['emailid']."</td></tr>";
        echo "<tr><td><b>AGE</b> </td>"."<td>".$row['age']."</td></tr>";
        echo "<tr><td><b>DOB</b> </td>"."<td>".$row['dob']."</td></tr>";
        
        echo "<tr><td><b>DEPARTMENT</b> </td>"."<td>".$row['deptname']."</td></tr>";
}
echo "</table>";
mysqli_close($conn);
?>
 </center>   
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>