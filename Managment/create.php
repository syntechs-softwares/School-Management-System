<?php 
$user = $_POST['user'];
$pwd = $_POST['pwd'];

$ad_id = $_GET['ad'];

$con = new mysqli("localhost","root","","register");
$con->query("INSERT INTO `admin` (`Admin`,`Password`) VALUES('$user','$pwd')");

header("location:admin.php?ad=".$ad_id);
?>
