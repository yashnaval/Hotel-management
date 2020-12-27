<?php
include ('db.php');
$jid=$_GET['sid'];
$km=$_GET['user'];
$sql = "DELETE FROM payment WHERE id='$jid'";
$re = mysqli_query($con,$sql);
$sql = "DELETE FROM roombook WHERE id='$jid'";
$re = mysqli_query($con,$sql);
header("location: up.php?sid=".$jid."&user=".$km);
?>