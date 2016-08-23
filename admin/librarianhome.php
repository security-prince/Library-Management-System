<?php
include('session.php');
error_reporting(0);
?>
<html>
<head>
	<title>JK College</title>

	<link rel="stylesheet" href="style.css">

	<script src="./assest/app.min.js"></script>

</head>
<body>
<div id="page" >

	<div class="header">
		<a href="librarianhome.php"><div class="header_style">JK College Library</div></a>

	</div>
	<nav>

		<p class="headerTxt">JK College Library</p>

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
						<div class='gap'></div>


			<div class='gap'></div>
	Page Built by <a href="profile.php"style="font-family:Roboto-Light,sans-serif;color:black"> Ishaq Mohammed</a><br>
	  Copyright &copy;2016 All Rights Reserved.	

		</footer>

	</nav>
<div class='gap'></div>

	<div class='gap'></div>
<div class="container">
	<center><h1>Welcome <span><?php echo $login_session; ?></span></h1>



	<br>
	<a href="addnewbooks.php"><button class="btn"  value="click"  type="button"><span>Add new books</span></button></a><br><br>
	<a  href="checkrequests.php"><button class="btn"  value="click"  type="button"><span>Check Requests</span></button></a><br><br>
	<a  href="contact.php"><button class="btn"  value="click"  type="button"><span>Check Suggestions</span></button></a><br ><br>
	<a href="clearrequests.php"><button class="btn"  value="click"  type="button"><span>Clear Requests</span></button></a><br ><br>
	<a href="clearsuggestions.php"><button class="btn"  value="click"  type="button"><span>Clear Suggestions</span></button></a><br ><br>
	<a  href="logout.php"><button class="btn"  value="click"  type="button"><span>logout</span></button></a></center>

</div>
</body>
</html>