<?php
error_reporting(0);
?><html>
<head>

	<title>JK College</title>
	<link rel="stylesheet"href="style.css">


<script src="./assest/app.min.js"></script>

</head>
<body>
<div id="page" >

	<div class="header">
		<a href="index.php"><div class="header_style">JK College Library</div></a>

	</div>
	<nav>

		<p class="headerTxt">JK College Library - Contact Us</p>

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
	<h2>Post Your Query Here</h2>
	    <span>Enter Full Name:</span><input type="text" name="name" required="true" /><br>
    	<span>Enter Email Id:</span><input type="email" name="email" required="true" /><br>
    	<span>Enter Contact no:</span><input type="text" name="number" required="true" />
    	    	<span>Your Query:</span><input type="text" name="idea" required="true" /><br>

        <br>
	<input id="send-button" type="submit" value="Send Message" name="submit"/>
</form>
		</body>
<html>
<?php
include('connect.php');
if(!$_POST['name']==''){
	$msg="Sended successfully";
echo '<script language="javascript">';

	echo'alert("Message Successfully Sent")';
	echo '</script>';
}
$msg;
echo "<hr></section>";
if($_POST['name']==''){
	exit();
}
$a = stripslashes($_POST['name']);
$b = stripslashes($_POST['email']);
$c = stripslashes($_POST['idea']);
$a = mysqli_real_escape_string($conn,$a);
$b = mysqli_real_escape_string($conn,$b);
$c = mysqli_real_escape_string($conn,$c);
$sql = "INSERT INTO contact (name, email, idea) VALUES ('$a', '" . $b . "', '" .$c . "')";
$sql;
$conn->query($sql);
mysqli_close($conn);
?>