<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
  <title>All User Page</title>
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

    <li class="nav-item active">
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

    <li class="nav-item ">
        <a class="nav-link"  href="update_delete.php">
         UPDATE AND DELETE
        </a>
    </li>
     <hr>

    </ul>
 
    
  </div>
  <div class="col-10" style="background-color:snow white;height:900px;width:700px">
  <div id="view_users" style="float:left;margin-left:50px">
  <br>
         <center> <h1>
          ALL USERS DETAILS
          </h1>
          </center>
          <br>
          <?php

          require('includes/database.php');

          $result = mysqli_query($conn,"SELECT * FROM userdetails as u join department as d on u.uid=d.did ");
          echo "<table cellpadding='15px' cellspacing='70px' border='1' id='filtersearch'>";

          echo "<tr><th>USER NAME</th><th>FIRST NAME</th><th>LAST NAME</th><th>EMAIL ID</th><th>AGE</th><th>DOB</th><th>DEPARTMENT</th></tr>";

          ?>
          <?php
          while($row = mysqli_fetch_array($result))
          {
            echo "";
            echo "<tr><td>". $row['username']."</td>";
            echo "<td>". $row['firstname']."</td>";
            echo "<td>".$row['lastname']."</td>";
            echo "<td>".$row['emailid']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>".$row['dob']."</td>";
            echo "<td>".$row['deptname']."</td></tr>";
          echo "";

          }
          ?>
          <?php
          echo "</table>";
          mysqli_close($conn);
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
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
