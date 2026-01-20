<?php 
$user = $_POST['user'];
$pwd = $_POST['pwd'];

$con = new mysqli("localhost","root","","register");
$sel_sp = $con->query("SELECT * FROM `admin` WHERE `Admin`='$user' AND `Password`='$pwd'");

$ad_id = 0;
while($row_sp=$sel_sp->fetch_array()){
    $ad_id = $row_sp['Id'];
}

if($sel_sp->num_rows > 0){
    header("location:System/index.php?ad=".$ad_id);
}else{
    header("location:index.php"); 
}
?>
