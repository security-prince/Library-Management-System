<?php


include('connect.php');





error_reporting(0);
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
		<a href="userhome.php"><div class="header_style">JK College Library</div></a>

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
	  Copyright &copy;2016 All Rights Reserved.		</footer>

	</nav>

	<div class='gap'></div>

	<div class='gap'></div>

	<div class="container"><br>
<form class="group" action="booksearch.php" method="POST">
Book Name:<input type="text" name="search_book"><br> <button type="submit" value="Go!" name="submit">Search</button></form>
<form class="group" method="post" action="">
	<h2>Request a Book</h2>
	<span>Name of the Book:</span><input type="text" name="name" placeholder="Full Name of Book" required="true"/>
    <span>Name of the Author:</span><input type="text" name="author" required="true" placeholder="Full Name of Author" />
    <span>Your Name:</span><input type="text" name="by" required="true" placeholder="Full Name" /><br>
    <button type="submit" value="Request" name="submit">Request</button>
</form>
</div>
		</div>
	</body>
</html>
<?php
include('connect.php');
if(!$_POST['name']==''){
echo '<script language="javascript">';

	echo'alert("Request Placed Successfully")';
	echo '</script>';
}
echo $msg;
echo "<hr></section>";
if($_POST['name']==''){
	exit();
}
$a = stripslashes($_POST['name']);
$b = stripslashes($_POST['author']);
$c = stripslashes($_POST['by']);
$a = mysqli_real_escape_string($conn,$a);
$b = mysqli_real_escape_string($conn,$b);
$c = mysqli_real_escape_string($conn,$c);
$d = mysqli_real_escape_string($conn,$d);
$sql = "INSERT INTO requests (name, author, `by`) VALUES ('$a', '" . $b . "', '" .$c . "')";

$conn->query($sql);
mysqli_close($conn);
?>