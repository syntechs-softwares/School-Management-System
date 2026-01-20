<?php 
$con = new mysqli("localhost","root","","register");

$sel = $con->query("SELECT * FROM tests");
$rows = $sel->num_rows;

$ad_id = $_GET['ad'];?>

<?php $sel_sp = $con->query("SELECT * FROM `admin` WHERE `Id`='$ad_id'");
while($row_sp = $sel_sp->fetch_array()):?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
div,input,h1,h2,h3,h4,h5,h6{
  border-radius:20px
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px none black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Entry</title>
</head>
<body style="background:#A92029;">
<div style=" background-image: linear-gradient(crimson, black);border-top-style:solid;border-left-style:solid;border-right-style:solid;">
<table><tr ><th><img style="width:150px;" src="main.png"></th>
<th><h1 style="color:yellow;font-size:40px;font-weight:bold">MULTI-WAY SCHOOL OF LANGUAGE</h1></th>
<th><form method="post" action="result.php?ad=<?php echo $ad_id;?>" style="float:left;height:100%;width:100%"">
          <input id="Done and Return" type="submit" value="Done and Return" style="width:100%;font-size:20px;padding-top:2px;background:black;color:white;">
      </form>
    </th>
</tr></table>
</div><br>
<center>
<div style="overflow:scroll;border:1px solid black;background:white;height:465px"><br>
<div style="background:black;">
<form method="post" action="newres_ind.php?cl=Tulip&ad=<?php echo $ad_id;?>">
    <input id="Done and Return" type="submit" value="Tulip" style="float:right;width:10%;font-size:15px;background:black;color:white;">
</form>
<form method="post" action="newres_ind.php?cl=Wit&ad=<?php echo $ad_id;?>">
    <input id="Done and Return" type="submit" value="Wit" style="float:right;width:10%;font-size:15px;background:black;color:white;">
</form>
<form method="post" action="newres_ind.php?cl=Stunning&ad=<?php echo $ad_id;?>">
    <input id="Done and Return" type="submit" value="Stunning" style="float:right;width:10%;font-size:15px;background:black;color:white;">
</form>
<form method="post" action="newres_ind.php?cl=Impeccable&ad=<?php echo $ad_id;?>">
    <input id="Done and Return" type="submit" value="Impeccable" style="float:right;width:10%;font-size:15px;background:black;color:white;">
</form>
<form method="post" action="newres.php?ad=<?php echo $ad_id;?>" style="float:left;width:10%">
    <input id="All" type="submit" value="All" style="width:100%;font-size:15px;background:Red;color:white;">
</form>
</div><br><br>
<form method="post" action="addres.php?tid=<?php echo $rows;?>&ad=<?php echo $ad_id;?>">
<table style="width:100%">
 <tr style="background:black; color:white;border: 1px solid white;">
  <th style="border: 1px solid white;">ID</th>
  <th style="border: 1px solid white;">STUDENT NAME</th>
  <th style="border: 1px solid white;">Class</th>
  <th style="border: 1px solid white;">Mark</th></tr>
  <?php $sel2 = $con->query("SELECT * FROM registery WHERE `Active`= 0");
  while($row5 = $sel2->fetch_array()):?>
  <tr style="font-weight:bold;background:#99ffcc; color:black;border: 1px solid white;">
   <td style="border: 1px solid white;"><?php echo "MW".$row5['Id']?></td>
   <td style="border: 1px solid white;"><?php echo $row5['FName']?></td>
   <td style="border: 1px solid white;"><?php echo $row5['Class']?></td>
   
    <td style="border: 1px solid white; width:150px">
      <span><?php $nwd = $row5['Id'];
      $sel3 = $con->query("SELECT * FROM result WHERE `SID`='$nwd' AND `TID`='$rows'");
      if($sel3->num_rows > 0){
        while($nrow=$sel3->fetch_array()){
          echo $nrow['Result'];
        }
      }else{
        echo "Not Given";
      }?></span>
    </td>
  </tr>
  <?php endwhile;?>
</table><br>
 <input type="number" name="outa" style="width:19%;font-size:20px;" required>
 <input type="submit" name="Mark" value="Mark" style="width:80%;font-size:20px;background:#000055;color:white;">
</form>

</div></center>
</body>
</html>
<?php endwhile;?>