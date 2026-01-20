<?php 
$con = new mysqli("localhost","root","","register");
$id = $_GET['id'];

$sel = $con->query("SELECT * FROM `Admin` WHERE `Id`='$id'");

$ad_id = $_GET['ad'];
$type = $_GET['type'];
if($type == "Registration"){
    $con->query("UPDATE `Admin` SET `Register`= '1' WHERE `Id`= $id");
}
elseif($type == "Payment"){
    $con->query("UPDATE `Admin` SET `Payment`= '1' WHERE `Id`= $id");
}
elseif($type == "Result"){
    $con->query("UPDATE `Admin` SET `Result`= '1' WHERE `Id`= $id");
}
elseif($type == "Others"){
    $con->query("UPDATE `Admin` SET `Others`= '1' WHERE `Id`= $id");
}
elseif($type == "Managment"){
    $con->query("UPDATE `Admin` SET `Manage`= '1' WHERE `Id`= $id");
}

header("location:edit.php?id=$id&ad=$ad_id");?>