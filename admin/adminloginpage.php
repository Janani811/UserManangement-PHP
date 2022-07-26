
<?php
session_start();
	include "includes/database.php";

	if(isset($_POST['login']))
	{
		
		$emailid=$_POST['emailid'];
		$password=$_POST['password'];
		
		$check=mysqli_query($conn,"select * from admin where  emailid='$emailid'");
		$checkadmin=mysqli_fetch_assoc($check);

		

		if($checkadmin>0)
		{	
		$checks="select * from admin where emailid='$emailid' and password='$password'";
			$row=mysqli_query($conn,$checks);
			if(mysqli_num_rows($row)==1)
			{
				$_SESSION["emailid"]=$emailid;
				if(isset($_SESSION["emailid"]))
				{			
					header("LOCATION:dashboard.php");
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

