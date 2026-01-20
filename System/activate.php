<?php 
$id = $_GET['id'];
$dates = strtotime($_POST['Date']);

$ad_id = $_GET['ad'];

$day = intval(date("d", $dates));
$month = intval(date("m", $dates));
$year = intval(date("Y", $dates));

$eday = $day;
$emonth = $month;
$eyear = $year;

if($eday < 10){
    $eday = "0".$eday;
}

if($emonth < 10){
    $emonth = "0".$emonth;
}


$date = $eday."-".$emonth."-".$eyear;

$con = new mysqli("localhost","root","","register");

$tday = date('d');
$tmonth = date('m');
$tyear = date('Y');
        
$sel_day = $con->query("SELECT * FROM `day_rep` WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
while($row_day = $sel_day->fetch_array()){
    $new = intval($row_day["Activated"])+1;
    $con->query("UPDATE `day_rep` SET `Activated`='$new' WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
}

$sel_mon = $con->query("SELECT * FROM `mon_rep` WHERE `Month`='$tmonth' AND `Year`='$tyear'");
while($row_mon = $sel_mon->fetch_array()){
    $new2 = intval($row_mon["Activate"])+1;
    $con->query("UPDATE `mon_rep` SET `Activate`='$new2' WHERE `Month`='$tmonth' AND `Year`='$tyear'");
}
$con->query("UPDATE registery SET `Stay` = 1,`Active` = 0, `RDate`= '$date', `SDay`= '$day', `SMonth`= '$month', `SYear`= '$year', `PDay`= '0' , `PMonth`= '0' , `PYear`= '0' , `Prepay`= '0', `Con`= '0' , `PreCon`= '0' WHERE `Id`='$id'");

header("location:unactives.php?ad=".$ad_id);

?>