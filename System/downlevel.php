<?php 
$id = $_GET['id'];
$con = new mysqli("localhost","root","","register");
$sel = $con->query("SELECT * FROM registery WHERE `Id`='$id'");

$ad_id = $_GET['ad'];

while($row = $sel->fetch_array()){
   if($row['Class']=='Wit'){
    $con->query("UPDATE registery SET `Class` = 'Tulip' WHERE `Id`='$id'");
    $con->query("UPDATE average SET `Class` = 'Tulip' WHERE `Id`='$id'");
   }
   elseif($row['Class']=='Stunning'){
    $con->query("UPDATE registery SET `Class` = 'Wit' WHERE `Id`='$id'");
    $con->query("UPDATE average SET `Class` = 'Wit' WHERE `Id`='$id'");
   }
   elseif($row['Class']=='Impeccable'){
      $con->query("UPDATE registery SET `Class` = 'Stunning' WHERE `Id`='$id'");
      $con->query("UPDATE average SET `Class` = 'Stunning' WHERE `Id`='$id'");
     }
}

header("location:result.php?ad=".$ad_id);

?>
