<?php 
$id = $_GET['id'];
$con = new mysqli("localhost","root","","register");
$sel = $con->query("SELECT * FROM registery WHERE `Id`='$id'");

$ad_id = $_GET['ad'];

$tday = date('d');
$tmonth = date('m');
$tyear = date('Y');

while($row = $sel->fetch_array()){
    $con->query("UPDATE registery SET `Prepay` = 1 WHERE `Id`='$id'");
}

$sel_day = $con->query("SELECT * FROM `day_rep` WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
while($row_day = $sel_day->fetch_array()){
    $new = intval($row_day["Paid"])+1;
    $con->query("UPDATE `day_rep` SET `Paid`='$new' WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
}

$ad_id = $_GET['ad'];
header("location:payment.php?ad=".$ad_id);

?>
