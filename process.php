<?php
//get values
$username=$_POST["user"];
$password=$_POST["pass"];

//to prevent mysql injections
$username=stripcslashes($username);
$password=stripcslashes($password);

//connect to the server
$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"hotel");

//querry
$result=mysqli_query($link,"select* from user where username='$username' and password='$password'")
			or die();
$row=mysqli_fetch_array($result);
if ($row['username']==$username && $row['password']==$password) {
	header("location: proj.php?user=$username");
} else {
	echo "login failed";
}

?>