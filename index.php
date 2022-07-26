<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>UserLogin</title> 
</head>
<style type="text/css">
	   form
	   {
		   	border:2px solid red;
		   	height:380px;
		   	width:400px;
		    margin-left: 35%;
		    border-radius:10px;
		    background-color: blue;
		    opacity:0.5;

	   }
	   input
	   {
	   		width:332px;
	   		height:24px;
	   }
	   label
	   {
	   	font-family:verdana;
	   		font-size:20px;
	   		color: white;
	   }
	
</style>
<body>

<br>
<br>
<h1 align="center" style="color:red">USER LOGIN PAGE</h1>
<form action="userlogin.php" method="POST">
		<fieldset style="border:none;margin-left:20px;">
		<br>
		<br>
		<label for="emailid">Email Id:</label><br><br>
		<input type="email" id="emailid" name="emailid" placeholder="  Type Here"><br><br>
		<label for="pass">Password :</label><br><br>
		<input type="password" id="pass" name="password" placeholder="  Type Here"><br><br><br>
		<center><button class="btn btn-primary btn-rounded" name="loggingin">LOGIN</button></center>
		<br>
		</fieldset>	
</form>


<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>