<?php 
$con = new mysqli("localhost","root","","register");
$id = $_GET['id'];

$sel = $con->query("SELECT * FROM `Admin` WHERE `Id`='$id'");

$ad_id = $_GET['ad'];
$type = $_GET['type'];
if($type == "Registration"){
    $con->query("UPDATE `Admin` SET `Register`= '0' WHERE `Id`= $id");
}
elseif($type == "Payment"){
    $con->query("UPDATE `Admin` SET `Payment`= '0' WHERE `Id`= $id");
}
elseif($type == "Result"){
    $con->query("UPDATE `Admin` SET `Result`= '0' WHERE `Id`= $id");
}
elseif($type == "Others"){
    $con->query("UPDATE `Admin` SET `Others`= '0' WHERE `Id`= $id");
}
elseif($type == "Managment"){
    $sel2 = $con->query("SELECT * FROM `Admin` WHERE `Manage`='1'");
    if($sel2->num_rows > 1){
       $con->query("UPDATE `Admin` SET `Manage`= '0' WHERE `Id`= $id");
    }
}

header("location:edit.php?id=$id&ad=$ad_id");?>