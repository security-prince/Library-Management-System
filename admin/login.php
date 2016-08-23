<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['user']) || empty($_POST['pass'])) {
		$error = "Username or Password is invalid";
	}
	else{
		include("../connect.php");
// Define $username and $password
		$username=$_POST['user'];
		$password=$_POST['pass'];
// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($conn,$username);
		$password = mysqli_real_escape_string($conn,$password);
// SQL query to fetch information of registerd users and finds user match.
		$sqli="SELECT * FROM librarian WHERE user = '". $username ."' and pass = '". $password ."'";
		$query = mysqli_query($conn,$sqli);
		$sqli;
		if (mysqli_num_rows($query) == 1) {
			$_SESSION['user']=$username; // Initializing Session
			header("location:librarianhome.php"); // Redirecting To Other Page
		} 
		else {
			echo '<script language="javascript">';

	echo'alert("Invalid Username or Password")';
	echo '</script>';
		}
		mysqli_close($conn); // Closing Connection
	}
}
?>
</form>
