<?php
$con = new mysqli("localhost","root","","register");
$name = $_POST["name"];
$per =$_POST["per"];

$ad_id = $_GET['ad'];

$tday = date('d');
$tmonth = date('m');
$tyear = date('Y');

$con->query("INSERT INTO `expense` (`Day`, `Month`, `Year`,`Expense`, `Amount`) VALUES ('$tday', '$tmonth', '$tyear', '$name', '$per')");
header("location:expense.php?ad=".$ad_id);?>