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
Page Built by <a href="profile.php"style="font-family:Roboto-Light,sans-serif;color:black"> Ishaq Mohammed</a><br>
	  Copyright &copy;2016 All Rights Reserved.	
	  		</footer>

	</nav>
<div class='gap'></div>

	<div class='gap'></div>
<div class="container">
<center><h2>Delete Requests</h2>
<?php
include('../connect.php');
$sql = "SELECT * FROM `requests`";
$result = mysqli_query($conn, $sql);
echo "<center><font color=\"black\" size=\"4\">";
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    	$id=$row["id"];
        echo "<li>ID&nbsp;: " . $row["id"]. ":&nbsp;&nbsp;&nbsp; Book Name: " . $row["name"]. "&nbsp&nbsp&nbsp||&nbsp&nbsp;<a href=\"?id=$id\">Delete Request </a><br><br>";
    }
} else {
    echo "No Requests Right Now" ;
}
if(isset($_GET['id'])){
	$del=mysqli_real_escape_string($conn,$_GET['id']);
	$sqli="DELETE FROM `requests` WHERE `id` = '". $del ."'";
	$de = mysqli_query($conn, $sqli);
}
echo "<hr></font>";
?>
