<?php
$con = new mysqli("localhost","root","","register");

$per =$_POST["per"];
$ad_id = $_GET['ad'];

$id = $_GET['id'];

$con->query("UPDATE `teachers` SET `Per` = '$per' WHERE `Id`= $id");
header("location:teachers.php?ad=".$ad_id);?>