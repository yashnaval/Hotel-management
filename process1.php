<?php
//get values
$username=$_POST["user"];
$password=$_POST["pass"];
$p1=$_POST["dass"];

//to prevent mysql injections
$username=stripcslashes($username);
$password=stripcslashes($password);
$p1=stripcslashes($p1);

//connect to the server
$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"hotel");
if ($password==$p1) {
	$result=mysqli_query($link,"insert into user values('$username','$password')")
			or die();
	header("location: proj.php?user=$username");
} else {
	echo "password doesn't match";
}

?>