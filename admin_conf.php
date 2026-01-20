<?php 
$user = $_POST['user'];
$pwd = $_POST['pwd'];

$con = new mysqli("localhost","root","","register");
$sel = $con->query("SELECT * FROM `admin` WHERE `Admin`='$user' AND `Password`='$pwd' AND `Manage`='1'");

if($sel->num_rows > 0){
    while($row=$sel->fetch_array()){
        header("location:Managment/admin.php?ad=".$row['Id']);
    }
}else{
    header("location:manage.php"); 
}
?>
