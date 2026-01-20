<?php 
$con = new mysqli("localhost","root","","register");
$name = $_POST["fname"]." ".$_POST['mname']." ".$_POST['lname'];
$gender =$_POST["gender"];
$class =$_POST["class"];
$contact =$_POST["contact"];
$subl =$_POST["subl"];
$ac =$_POST["acadamy"];
$stype =$_POST["stype"];
$shift =$_POST["shift1"].":".$_POST["shift2"]." ".$_POST["shift3"];

$ad_id = $_GET['ad'];

$realt =$_POST["date"];
$now = strtotime($realt);

$day = intval(date("d", $now));
$month = intval(date("m", $now));
$year = intval(date("Y", $now));

$date = $day."-".$month."-".$year;

$con->query("INSERT INTO registery (FName,SDay,SMonth,SYear,Class,Gender,RDate,Contact,Shift,`Level`,`Locker`,`SType`) VALUES('$name',$day,$month,$year,'$class','$gender','$date','$contact','$shift','$ac','$subl','$stype')");

$tday = date('d');
$tmonth = date('m');
$tyear = date('Y');

$sel_day = $con->query("SELECT * FROM `day_rep` WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
while($row_day = $sel_day->fetch_array()){
    $new = 0;
    if($stype=="NO"){
        $new = intval($row_day["Registered"])+1;
        $con->query("UPDATE `day_rep` SET `Registered`='$new' WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
    }elseif($stype=="SPer"){
        $new = intval($row_day["Sp_Reg"])+1;
        $con->query("UPDATE `day_rep` SET `Sp_Reg`='$new' WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
    }elseif($stype=="SPO"){
        $new = intval($row_day["Spo_Reg"])+1;
        $con->query("UPDATE `day_rep` SET `Spo_Reg`='$new' WHERE `Day`='$tday' AND `Month`='$tmonth' AND `Year`='$tyear'");
    }
}

$sel_mon = $con->query("SELECT * FROM `mon_rep` WHERE `Month`='$tmonth' AND `Year`='$tyear'");
while($row_mon = $sel_mon->fetch_array()){
    $new2 = 0;
    if($stype=="NO"){
        $new2 = intval($row_day["Registered"])+1;
        $con->query("UPDATE `mon_rep` SET `Registered`='$new2' WHERE `Month`='$tmonth' AND `Year`='$tyear'");
    }elseif($stype=="SPer"){
        $new2 = intval($row_day["Sp_Reg"])+1;
        $con->query("UPDATE `mon_rep` SET `Sp_Reg`='$new2' WHERE `Month`='$tmonth' AND `Year`='$tyear'");
    }elseif($stype=="SPO"){
        $new2 = intval($row_day["Spo_Reg"])+1;
        $con->query("UPDATE `mon_rep` SET `Spo_Reg`='$new2' WHERE `Month`='$tmonth' AND `Year`='$tyear'");
    }
}
header("location:index.php?ad=".$ad_id);
?>