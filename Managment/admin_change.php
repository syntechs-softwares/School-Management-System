<?php 
$con = new mysqli("localhost","root","","register");
$id = $_GET['id'];

$sel = $con->query("SELECT * FROM `Admin` WHERE `Id`='$id'");

$ad_id = $_GET['ad'];
$admin = $_POST['user'];
$passw = $_POST['user'];

$con->query("UPDATE `Admin` SET `Admin`= '$admin',`Password`= '$passw' WHERE `Id`= $id");

header("location:edit.php?id=$id&ad=$ad_id");?>