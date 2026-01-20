<?php 
$con = new mysqli("localhost","root","","register");

$ad_id = $_GET['ad'];

$day = intval(date("d"));
$month = intval(date("m"));
$year = intval(date("Y"));

$date = "$day"."/"."$month"."/"."$year";
$con->query("INSERT INTO tests(`Date`) VALUES('$date')");

header("location:newres_ind.php?cl=Tulip&ad=".$ad_id);
?>