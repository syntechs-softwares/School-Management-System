<?php
$con = new mysqli("localhost","root","","register");

$amt = intval($_GET["amt"]);
$ad_id = $_GET['ad'];

$name = "Teacher Payment: ".$_GET["name"];

$id = intval($_GET['id']);

$tday = date('d');
$tmonth = date('m');
$tyear = date('Y');

$con->query("UPDATE `teachers` SET `Class` = '0' WHERE `Id`= $id");
$con->query("INSERT INTO `expense` (`Day`, `Month`, `Year`,`Expense`, `Amount`) VALUES ('$tday', '$tmonth', '$tyear', '$name', '$amt')");
header("location:teachers.php?ad=".$ad_id);?>