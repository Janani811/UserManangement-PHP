
<?php
session_start();
if(isset($_SESSION["emailid"] )){
	echo "<script>alert('Logged Out Sucessfully'); window.location = 'index.php'</script>";
	
unset($_SESSION["emailid"]);
}else{
	echo "<script>alert('login Again'); window.location = 'index.php'</script>";
	
}

?>
