<?php
include("includes/database.php");
$id=$_GET['uid'];
$username=$_GET['username'];

$emailid=$_GET['emailid'];
$age=$_GET['age'];

$update="update userdetails set username='$username',emailid='$emailid',age='$age' where uid='$id' ";
if(mysqli_query($conn,$update)){
	echo "<script>alert('Update successfully');</script>";
	header("Location:update_delete.php");
}
else{
	echo "<script>alert('Error');</script>";
}
mysqli_close($conn);

?>