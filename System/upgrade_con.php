<?php
$con = new mysqli("localhost","root","","register");
$name = $_POST["name"];
$contact =$_POST["contact"];
$shift =$_POST["shift"];

$sub =$_POST["sub"];
$level =$_POST["acadamy"];
$type =$_POST["type"];

$ad_id = $_GET['ad'];
$id = $_GET['id'];

$con->query("UPDATE registery SET `FName`='$name',`Contact`='$contact',`Shift`='$shift',`Locker`= $sub ,`Level`='$level' ,`SType`='$type' WHERE `Id`='$id'");
header("location:upgrade.php?ad=$ad_id&id=$id");?>