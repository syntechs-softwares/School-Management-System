<?php 
$con = new mysqli("localhost","root","","register");
$id = $_GET["id"];

$ad_id = $_GET['ad'];

$sel = $con->query("SELECT * FROM `admin`");

if($sel->num_rows > 1){
 $con->query("DELETE FROM `admin` WHERE `Id`='$id'");
}

header("location:admin.php?ad=".$ad_id);?>