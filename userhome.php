<?php
include('session.php');
?><html>
<head>
	<title>JK College</title>

	<link rel="stylesheet" href="./assest/style.css">

	<script src="./assest/app.min.js"></script>

</head>
<body>
<div id="page" >

	<div class="header">
		<a href="userhome.php"><div class="header_style">JK College Library</div></a>

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
Page Built by <a href="profile.php"style="font-family:Roboto-Light,sans-serif;color:black"> Ishaq Mohammed</a><br>
For Any Suggestions and Queries <br><a href="contactus.php"style="font-family:Roboto-Light,sans-serif;color:black">Contact Me</a><br>
	  Copyright &copy;2016 All Rights Reserved.		</footer>

	</nav>
<div class='gap'></div>

	<div class='gap'></div>
<div class="container">
	<h1>Welcome <span><?php echo $login_session; ?></span></h1><br />

<div class='gap'></div>
	<a href="requestbook.php"><button class="btn"  value="click"  type="button"><span>Request a Book</span></button>

	<div class='gap'></div>
	<a href="logout.php"><button class="btn"  value="click"  type="button"><span>Logout</span></button>

	<br>
	

</div>
	</div>
</body>
</html>