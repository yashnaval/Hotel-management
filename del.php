<?php
include ('db.php');
$jid=$_GET['rid'];
$km=$_GET['user'];
$sql = "DELETE FROM roombook WHERE id='$jid'";
$re = mysqli_query($con,$sql);
header("location: userpanel.php?user=".$km);
?>