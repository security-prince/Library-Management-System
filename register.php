<?php
error_reporting(0);
?><html>
<head>
	<title>JK College</title>

	<link rel="stylesheet" href="style.css">

	<script src="./assest/app.min.js"></script>

</head>
<body>
<div id="page" >

	<div class="header">
		<a href="index.php"><div class="header_style" style="font-family:Rosermery,sans-serif">JK College Library</div></a>

	</div>
	<nav>

		<p class="headerTxt">JK College Library - Register</p>

		<div class='gap'></div>
		<div class="dsc">Way to JK College Library</div>

		<div class='gap'></div>
		<footer>
			<p>The site was last updated on </p>
			<p>5 5 2016 10:25 PM</p>
			<div class='gap'></div>

			<div class='gap'></div>

			<div class='gap'></div>
			<div class='gap'></div>

			<div class='gap'></div>

			<div class='gap'></div>
			<div class='gap'></div>
			<div class='gap'></div>
			<div class='gap'></div>

			<div class='gap'></div>

			<div class='gap'></div>
			
Page Built by <a href="profile.php"style="font-family:Roboto-Light,sans-serif;color:black"> Ishaq Mohammed</a><br>
For Any Suggestions and Queries <br><a href="contactus.php"style="font-family:Roboto-Light,sans-serif;color:black">Contact Me</a><br>
	  Copyright &copy;2016 All Rights Reserved.		</footer>

	</nav>

	<div class='gap'></div>

	<div class='gap'></div>
<div class="container">

<form action="#" method="POST">
<div class="group">
	<h2>Registration</h2>
	    <span>Enter Full Name:</span><input type="text" name="fullname" required="true" /><br>
		<span>Enter Username:</span><input type="text" name="username" required="true"/><br>
    	<span>Enter Password:</span><input type="password" name="password" required="true" /><br>
    	<span>Enter Email Id:</span><input type="email" name="email" required="true" /><br>
    	<span>Enter Contact no:</span><input type="text" name="number" required="true" />
        <br>
    <button type="submit" value="Register" name="submit">Register</button></a></div>
</form>
		</body>
<html>
<?php
include('connect.php');
if(!$_POST['username']==''){
	echo '<script language="javascript">';

	echo'alert("Registration Successful")';
	echo '</script>';
}
echo $msg;
echo "<hr></section>";
if($_POST['username']==''){
	exit();
}
$a = stripslashes($_POST['username']);
$b = stripslashes($_POST['password']);
$c = stripslashes($_POST['email']);
$d = stripslashes($_POST['number']);

$a = mysqli_real_escape_string($conn,$a);
$b = mysqli_real_escape_string($conn,$b);
$c = mysqli_real_escape_string($conn,$c);
$d = mysqli_real_escape_string($conn,$d);
$sql = "INSERT INTO students (user, pass, email, no) VALUES ('$a', '" . $b . "', '" .$c . "', '" . $d . "')";
$conn->query($sql);
mysqli_close($conn);
?>