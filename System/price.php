<?php 
$con = new mysqli("localhost","root","","register");
$type = $_GET['af'];



$ad_id = $_GET['ad'];
if($type == "pay"){
    $pay = $_POST['pay'];
    $con->query("UPDATE `Money` SET `Pay`= '$pay'");
}
elseif($type == "reg"){
    $reg = $_POST['reg'];
    $con->query("UPDATE `Money` SET `Reg`= '$reg'");
}

elseif($type == "spe"){
    $spe = $_POST['spe'];
    $con->query("UPDATE `Money` SET `Spe`= '$spe'");
}

elseif($type == "rspe"){
    $rspe = $_POST['rspe'];
    $con->query("UPDATE `Money` SET `Spe_Reg`= '$rspe'");
}


header("location:more.php?ad=$ad_id");?>