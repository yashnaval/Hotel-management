<?php
include ('db.php');
$jid=$_GET['sid'];
$km=$_GET['user'];
$sql1 = "UPDATE room SET cusid=NULL , place='Free' WHERE cusid='$jid'";
$re = mysqli_query($con,$sql1);
header("location: admin/home.php?user=".$km);
?>