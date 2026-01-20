<?php
$con = new mysqli("localhost","root","","register");

$per = intval($_GET["join"]) + 1;
$ad_id = $_GET['ad'];

$id = intval($_GET['id']);

$tday = date('d');
$tmonth = date('m');
$tyear = date('Y');

$con->query("UPDATE `teachers` SET `Class` = '$per' WHERE `Id`= $id");
$con->query("INSERT INTO `teach_log` (`Day`, `Month`, `Year`, `TID`) VALUES ('$tday', '$tmonth', '$tyear', '$id')");
header("location:teachers.php?ad=".$ad_id);?>