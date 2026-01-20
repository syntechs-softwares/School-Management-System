<?php 
$id = $_GET['id'];

$day = intval($_GET['day']);
$month = intval($_GET['month']);
$year = intval($_GET['year']);

$stype = "NO"; 

$tday = date('d');
$tmonth = date('m');
$tyear = date('Y');

$con = new mysqli("localhost","root","","register");
$con->query("UPDATE registery SET `PreCon` = '0', `Prepay` = '0',`Con` = '0',`SDay` = '$day' ,`SMonth` = '$month',`SYear`='$year' WHERE `Id` = '$id'");

$sel_day = $con->query("SELECT * FROM `day_rep` WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
$sel = $con->query("SELECT * FROM `registery` WHERE `Id` = '$id'");
while($row=$sel->fetch_array()){
    $stype = $row["SType"];
}
while($row_day = $sel_day->fetch_array()){
    $new = 0;
    if($stype=="NO"){
        $new = intval($row_day["Paid"])+1;
        $con->query("UPDATE `day_rep` SET `Paid`='$new' WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
    }elseif($stype=="SPer"){
        $new = intval($row_day["Sp_Paid"])+1;
        $con->query("UPDATE `day_rep` SET `Sp_Paid`='$new' WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
    }elseif($stype=="SPO"){
        $new = intval($row_day["Spo_Paid"])+1;
        $con->query("UPDATE `day_rep` SET `Spo_Paid`='$new' WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
    }
}

$ad_id = $_GET['ad'];
header("location:payment.php?ad=".$ad_id);?>