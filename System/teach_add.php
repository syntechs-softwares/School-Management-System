<?php
$con = new mysqli("localhost","root","","register");
$name = $_POST["name"];
$gender =$_POST["gender"];
$per =$_POST["per"];
$contact =$_POST["contact"];

$ad_id = $_GET['ad'];



$con->query("INSERT INTO teachers (`Name`,Sex,Per,contact) VALUES('$name','$gender','$per','$contact')");
header("location:teachers.php?ad=".$ad_id);?>