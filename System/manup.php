<?php 
$con = new mysqli("localhost","root","","register");
$sel = $con->query("SELECT * FROM registery WHERE `Active`= 0");
$TID = $_GET['tid'];

$ad_id = $_GET['ad'];

$cl = $_GET['cl'];
$con->query("DELETE FROM `result` WHERE `Class`='$cl' AND `TID`='$TID'");

$out = $_POST['outa'];
$selt = $con->query("SELECT * FROM tests WHERE `Id`= '$TID'");
while($rowt=$selt->fetch_array()){
   $con->query("UPDATE `tests` SET `OutOf`='$out',`Scored`='1' WHERE `Id`='$TID'");
}

$query = "INSERT INTO result(`SID`,`TID`,`Result`,`OutOf`,`Class`) VALUES(0,0,0,0,0)";
$query2 = "INSERT INTO `average` (`Id`,`Name`,`Class`,`Average`) VALUES(0,0,0,0)";
while($row = $sel->fetch_array()){
    $SID = $row['Id'];
    $STName = $row["FName"];
    $STClass = $row["Class"];
    $prog = $_POST[$SID];

    $mark = round(($prog/$out)*100);
    if($mark != 0){
        $query = $query.",('$SID','$TID','$prog','$mark','$cl')";
    }
}
$con->query("$query");
$con->query("DELETE FROM result WHERE `SID`='0'");

$sel2 = $con->query("SELECT * FROM registery WHERE `Active`= 0");
while($row2 = $sel2->fetch_array()){
    $SID = $row2['Id'];
    $STName = $row2["FName"];
    $STClass = $row2["Class"];

    $sel5= $con->query("SELECT * FROM result WHERE `SID`= $SID ORDER BY `Result` DESC");
        $gen = 0;
        $ave = "NO EXAMS TAKEN";
        while($nrow = $sel5->fetch_array()){
            $nres = $nrow["OutOf"]; 
            $gen = $gen+$nres;
            $numy = $sel5->num_rows;

            if ($numy == 0){
                $ave = "NO EXAMS TAKEN";
            }else{
                $ave = round($gen/$numy);
                }
        }
        $query2 = $query2.",('$SID','$STName','$STClass','$ave')";
    
}        
$con->query("DELETE FROM average");
$con->query("$query2");
$con->query("DELETE FROM average WHERE `Id`='0'");
header("location:manuplate.php?cl=$cl&ad=$ad_id&id=$TID");
?>