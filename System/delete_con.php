<?php 
$con = new mysqli("localhost","root","","register");
$sel = $con->query("SELECT * FROM `registery` WHERE `Active`= 0");

$ad_id = $_GET['ad'];
$check = "0";
while($row = $sel->fetch_array()){
    $ID = $row['Id'];
    $check = intval($_POST[$ID]);

    if($check != 0){
        $con->query("DELETE FROM `registery` WHERE `Id`= '$ID'");
    }
}
header("location:delete_all.php?ad=".$ad_id);
?>