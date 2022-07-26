<?php
	include "includes/database.php";

	if(isset($_POST['insert']))
	{
		
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$emailid=$_POST['emailid'];
		$password=$_POST['password'];
		$age=$_POST['age'];
		$dob=$_POST['dob'];
		$department=$_POST['department'];
		
		$user="insert into userdetails(firstname,lastname,username,emailid,password,age,dob) VALUES ('$firstname','$lastname','$username','$emailid','$password','$age','$dob')";
		$depart="insert into department(deptname) VALUES ('$department')";
		$user_execute=mysqli_query($conn,$user);
		$depart_execute=mysqli_query($conn,$depart);
		
			if($user_execute>0 && $depart_execute>0)
			{
				header("LOCATION:adduserpage.php");
			}
			else
			{
				echo mysqli_error($conn);
			}
	}
?>