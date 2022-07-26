<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Update and Delete</title>
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
      background-color:#ffccee;
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

  <input type="text" id="search" onkeyup="filters()" placeholder="Filter Here">
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

    <li class="nav-item">
        <a class="nav-link"  href="adduserpage.php">
         ADD USER
        </a>
    </li>
     <hr>
    <li class="nav-item active">
        <a class="nav-link"  href="update_delete.php">
         UPDATE AND DELETE
        </a>
    </li>
     <hr>

    </ul>
 
    
  </div>
  <div class="col-10" style="background-color:snow white;height:900px;width:700px">
  <div id="update" style="float:left;margin-left:60px;">
<h1 style="margin-left:250px">UPDATE AND DELETE USER</h1>
<br>
<br>

      <?php include("includes/database.php");
       $query="select * from userdetails as u join department as d on u.uid=d.did";
      $res= mysqli_query($conn,$query);
    
       if(mysqli_num_rows($res)>0)
       { 
        
        echo "<table cellpadding='8px' cellspacing='70px' border='1' id='filtersearch'>";
        echo "<thead>";
      
          echo "<tr><th>USER NAME</th><th>FIRST NAME</th><th>LAST NAME</th><th>EMAIL ID</th><th>AGE</th><th>DOB</th><th>DEPARTMENT</th><th>UPDATE</th><th>DELETE</th></tr>";
        echo "</thead>";
        echo "<tbody>";
         while($row=mysqli_fetch_array($res))
         {
            
                  
    ?>

      <tr>
        <td><?php echo $row['username'];?></td>
        
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['lastname'];?></td>
        
        <td><?php echo $row['emailid'];?></td>
        <td><?php echo $row['age'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['deptname'];?></td>

        
        <td>
        <a href="editpage.php?id=<?php echo $row['uid'];?>" class="btn btn-primary">Update</a></td>
        <td>
        <a href="delete.php?id=<?php echo $row['uid'];?>" class="btn btn-danger">Delete</a>
    </td>
        
      </tr>
      <?php 
    
}
echo "</tbody>";
echo "</table>";
}
?>
</div>

</div>

<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
</div>

<script>
function filters() {
  var input, filter, table, tr, td, i,textValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("filtersearch");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      textValue = td.textContent || td.innerText;
      if (textValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>