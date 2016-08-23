<?php
include('login.php');
if(isset($_SESSION['user'])){
header("location: userhome.php");
}
?>
<html>
<head>
	<title>JK College</title>

	<link rel="stylesheet" href="assest/style.css">

	<script src="./assest/app.min.js"></script>

</head>
<body>
<div id="page" >

	<div class="header">
		<a href="index.php"><div class="header_style">JK College Library</div></a>

	</div>
	<nav>

		<p class="headerTxt">JK College Library - Student Login</p>

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
	  Copyright &copy;2016 All Rights Reserved.

	  		</footer>

	</nav>

	<div class='gap'></div>

	<div class='gap'></div>

	<div class="container">

	<form method="POST" action="#" >

		<div class="group">
			<label for="emailAuth"></label><input type="text" name="user"  required>
			<span class="highlight"></span>
			<span class="bar"></span>
			<label>Enter Username</label>
		</div>

		<div class="group">
			<label for="usernameAuth"></label><input  type="password" name="pass" required>
			<span class="highlight"></span>
			<span class="bar"></span>
			<label>Enter Password</label>
		</div>
		<button type="submit" value="Register" name="submit">Login</button>
			<?php echo $error; ?>
	</form>


</div>
	</div>

</body>
</html>