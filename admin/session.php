<?php
include("../connect.php");
include('login.php');
$user=$_SESSION['user'];
$ses_sql=mysqli_query($conn,"select user from librarian where user='". $user ."'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['user'];
if(!isset($login_session)==$username){
	mysqli_close($conn); // Closing Connection
	header("location:../index.php");
	exit();
}
?>