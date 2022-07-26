<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
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
    <li class="nav-item ">
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

    <li class="nav-item ">
        <a class="nav-link"  href="alluserpage.php">
         ALL USERS
        </a>
    </li>

     <hr>
    <li class="nav-item active">
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
  <div id="updates" style="float:left;margin-left:300px;">
	<div class="container" style="padding-top: 20px;padding-bottom: 20px width:300px;height: 600px; margin-top: 50px;">
	<h3 style="margin-left:140px">UPDATE USERS DETAILS</h3>
	<form action="editphp.php" method="GET">
  <?php
  $id=$_GET['id'];
  include("includes/database.php");
  $query="select * from userdetails where uid ='$id'";
  $res=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($res))
		{
		?>
    <table border="1" cellpadding="20px">
    <tr><div class="form-group">
    
    <tr><div class="form-group">
    <td><br><label for="uname">USER NAME</label></td>
    <td><br><input type="text" name="username" id="uname" class="form-control" value="<?php echo $row['username'];?>"></td>
    </div></tr>
    
    <tr><div class="form-group">
    <td><br><label for="mailid">EMAIL ID</label></td>
    <td><br><input type="email" name="emailid" id="mailid" class="form-control" value="<?php echo $row['emailid'];?>"></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="num">AGE</label></td>
    <td><br><input type="number" name="age" id="num" class="form-control" min="18" step="1" value="<?php echo $row['age'];?>"></td>
    </div></tr>
    </table>

  <input type="hidden" name="uid" class="btn btn-primary" value="<?php echo $row['uid'];?>" >

   <br>
  <input type="submit" class="btn bg-success btn-block" value="Update User" name="submit">

<?php
}
mysqli_close($conn);
?>

		
	</form>
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