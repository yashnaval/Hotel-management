<?php
$con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());

?>
<?php
	$server = "sql202.epizy.com";
	$username = "epiz_27584058";
	$password = "DrEnvuWLKq3OOgP";
	$dbname = "epiz_27584058_abhishotel";
	
	$conn = mysqli_connect($server, $username, $password, $dbname);
	
	if(!$conn){
		die("Connection Failed:".mysqli_connect_error());
	}
?>