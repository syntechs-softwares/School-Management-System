<?php 
$id = $_GET['id'];

$con = new mysqli("localhost","root","","register");
$con->query("UPDATE registery SET `Active`= 1 WHERE `Id` = '$id'");

$tday = date('d');
$tmonth = date('m');
$tyear = date('Y');

$sel_day = $con->query("SELECT * FROM `day_rep` WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
while($row_day = $sel_day->fetch_array()){
    $new = intval($row_day["Deactivated"])+1;
    $con->query("UPDATE `day_rep` SET `Deactivated`='$new' WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
}

$sel_mon = $con->query("SELECT * FROM `mon_rep` WHERE `Month`='$tmonth' AND `Year`='$tyear'");
while($row_mon = $sel_mon->fetch_array()){
    $new2 = intval($row_mon["Deactivate"])+1;
    $con->query("UPDATE `mon_rep` SET `Deactivate`='$new2' WHERE `Month`='$tmonth' AND `Year`='$tyear'");
}

$ad_id = $_GET['ad'];
header("location:payment.php?ad=".$ad_id);

?>