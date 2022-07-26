<!DOCTYPE html>
<html>
<head>
	<title>Add User Page</title>
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
      padding: 20px;
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
  <div class="col-10" style="background-color:snow white;width:700px">
  <div id="add_user" style="float:left;margin-left:300px;">


<h1 style="margin-left:150px">ADD USER</h1>
<br>
<form action="adduser.php" method="POST" >
<center>
<table style="width:500px;margin-right:100px;">
    <tr><div class="form-group">
    <td><label for="fname">FIRST NAME</label></td>
    <td><input type="text" name="firstname" id="fname" class="form-control" required></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="lname">LAST NAME</label></td>
    <td><br><input type="text" name="lastname" id="lname" class="form-control" required></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="uname">USER NAME</label></td>
    <td><br><input type="text" name="username" id="uname" class="form-control" required></td>
    </div></tr>
    
    <tr><div class="form-group">
    <td><br><label for="mailid">EMAIL ID</label></td>
    <td><br><input type="email" name="emailid" id="mailid" class="form-control" required></td>
    </div></tr>

    <tr><div class="form-group">
    <td><br><label for="pass">PASSWORD</label></td>
    <td><br><input type="password" name="password" id="pass" class="form-control" required></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="num">AGE</label></td>
    <td><br><input type="number" name="age" id="num" class="form-control" min="18" step="1" required></td>
    </div></tr>

    <tr><div class="form-group">
    <td><br><label for="dob">DOB</label></td>
    <td><br><input type="date" id="dob" name="dob" style="width:220px;border-color:grey" required=""></td>
    </div></tr>

    <tr><div class="form-group">
    <td><br><label for="department">DEPARTMENT</label></td>
    <td><br><select id="department" name="department" class="form-control" required>
          <option>SOFTWARE DEVELOPER</option>
          <option>TRAINER</option>
          <option>ENGINEER</option>
          <option>WEB DEVELOPER</option>
          <option>FRONT END DEVELOPER</option>
          <option>BACK END DEVELOPER</option>
        </select></td>
    </div></tr>
    
    <tr>
    <td colspan="2"><center><br><button class="btn btn-primary btn-rounded" name="insert" style="">Add User</button></center></td></tr>

    </table>
    </center>
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
