<?php
include("includes/database.php");
$id=$_GET['id'];

$del1="delete from userdetails where uid='$id'";
$del2="delete from department where did='$id'";
if((mysqli_query($conn,$del1)>0) && (mysqli_query($conn,$del2)>0))
{
	echo "<script>alert('Deleted Successfully');</script>";
	header("Location:update_delete.php");
}
else
{
	echo "<script>alert('Error');</script>";
}
mysqli_close($conn);

?>