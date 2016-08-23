<?php
include('session.php');
error_reporting(0);
?>
<html>
<head>
	<title>JK College</title>

	<link rel="stylesheet" href="style.css">

	<script src="./assest/app.min.js"></script>
<script type="text/javascript">
		//auto expand textarea
		function adjust_textarea(h) {
		    h.style.height = "45px";
		    h.style.height = (h.scrollHeight)+"px";
		}
	</script>
</head>
<body>
<div id="page" >

	<div class="header">
		<a href="librarianhome.php"><div class="header_style">JK College Library</div></a>

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
			<div class='gap'></div>
	Page Built by <a href="profile.php"style="font-family:Roboto-Light,sans-serif;color:black"> Ishaq Mohammed</a><br>
	  Copyright &copy;2016 All Rights Reserved.	

		</footer>

	</nav>

	<div class='gap'></div>

	<div class='gap'></div>

	<div class="container">

<form class="group" action="#" method="post">
	<h2>Add New Books</h2>
	<span>Name of the Book:</span><input type="text" name="name" placeholder="Full Name of Book" required="true"/>
    <span>Name of the Author:</span><input type="text" name="author" required="true" placeholder="Full Name of Author" />
    	<span>No. of Copies</span><input type="text" name="no_of_copies" placeholder="No. of Copies" required="true"/>
<br>
   <button type="submit" value="Add Books" name="submit">Add Books</button>
</form>

</body>
</html>
</form>
<?php
include('../connect.php');
if(!$_POST['name']==''){
	echo '<script language="javascript">';

	echo'alert("Book Added Successfully")';
	echo '</script>';
}
echo $msg;
echo "<hr></section>";
if($_POST['name']==''){
	exit();
}
$a = stripslashes($_POST['name']);
$b = stripslashes($_POST['author']);
$c = stripslashes($_POST['no_of_copies']);
$a = mysqli_real_escape_string($conn,$a);
$b = mysqli_real_escape_string($conn,$b);
$c = mysqli_real_escape_string($conn,$c);
$sql = "INSERT INTO books (name, author,no_of_copies) VALUES ('$a','" . $b . "', '" .$c . "')";
$conn->query($sql);

mysqli_close($conn);
?>