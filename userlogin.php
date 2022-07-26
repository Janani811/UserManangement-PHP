
<?php
session_start();
	include "database.php";

	if(isset($_POST['loggingin']))
	{
		
		$emailid=$_POST['emailid'];
		$password=$_POST['password'];
		
		$check=mysqli_query($conn,"select * from userlogin where emailid='$emailid'");
		$checkuser=mysqli_fetch_assoc($check);

		if($checkuser>0)
		{	
		$checks="select * from userlogin where emailid='$emailid' and password='$password'";
			$row=mysqli_query($conn,$checks);
			if(mysqli_num_rows($row)==1)
			{
				$_SESSION["emailid"]=$emailid;
				if(isset($_SESSION["emailid"]))
				{
					echo '<script> alert("Your Registration Process is Complete");</script>';
					header("LOCATION:userprofile.php");
				}
			}
		}
			else
			{
				echo "<script> alert();
					window.location='index.php'</script>";
			}
	

	}
		
?>