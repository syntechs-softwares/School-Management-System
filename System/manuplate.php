<?php 
$cl=$_GET['cl'];
$con = new mysqli("localhost","root","","register");

$sel = $con->query("SELECT * FROM tests");
$rows = $sel->num_rows;

$ad_id = $_GET['ad'];
$id = $_GET['id'];?>

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
::-webkit-scrollbar {
  border-radius:20px
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Entry</title>
</head>
<body style="background:#A92029;">
<div style="overflow:hidden;box-shadow:10px 10px #540004; background-image: linear-gradient(crimson, black);border-top-style:solid;border-left-style:solid;border-right-style:solid;">
<form method="post" action="../index.php">
  <span style="border-radius:0px;background:#552222;float:left;width:15%;color:white;text-align:center;font-size:24px;"><?php echo $row_sp["Admin"];?></span>
  <input type="submit" value="Log Out" style="border-radius:0px;float:right;width:85%;font-size:20px;background:#552222;color:white;padding-right:10px">
</form>
<table><tr ><th><img style="width:150px;" src="main.png"></th>
<th><h1 style="color:yellow;font-size:40px;font-weight:bold;margin-bottom:1px">MULTI-WAY SCHOOL OF LANGUAGE</h1><span style="color:white;">THE WAY TO A BRIGHT FUTURE!!</span></span></th>
<th style="width:300px"><div style="float:right;height:40px;width:300px;overflow:auto">
<?php if($row_sp["Register"] == '1'):?>
      <form method="post" action="indiv.php?id=<?php echo $id;?>&ad=<?php echo $ad_id;?>" style="float:left;height:100%;width:100%">
          <input id="Registration" type="submit" value="Done And Return" style="height:100%;width:100%;font-size:20px;padding-top:2px;background:black;color:white;">
      </form><?php endif;?>
    </div>
    </th></tr></table>
</div><br>
<center>
<div style="overflow:scroll;border:1px solid black;background:white;height:430px"><br>
<div style="background:black;">
<form method="post" action="manuplate_search.php?cl=<?php echo $cl;?>&ad=<?php echo $ad_id;?>&id=<?php echo $id;?>" style="float:left;width:30%">
        <div style="padding-left:10px;"><input type="text" name="search" style="width:75%;font-size:20px;" required>
        <input type="submit" value="Search" style="width:20%;font-size:20px;float:right;background:#006600;color:white;"></div>
      </form>
<form method="post" action="manuplate.php?cl=Impeccable&ad=<?php echo $ad_id;?>&id=<?php echo $id;?>">
    <input id="Done and Return" type="submit" value="Impeccable" style="float:right;width:10%;font-size:15px;background:<?php if($cl == 'Impeccable'){echo "#003300";}else{echo "black";}?>;color:white;">
</form>
<form method="post" action="manuplate.php?cl=Stunning&ad=<?php echo $ad_id;?>&id=<?php echo $id;?>">
    <input id="Done and Return" type="submit" value="Stunning" style="float:right;width:10%;font-size:15px;background:<?php if($cl == 'Stunning'){echo "#3366cc";}else{echo "black";}?>;color:white;">
</form>
<form method="post" action="manuplate.php?cl=Wit&ad=<?php echo $ad_id;?>&id=<?php echo $id;?>">
    <input id="Done and Return" type="submit" value="Wit" style="float:right;width:10%;font-size:15px;background:<?php if($cl == 'Wit'){echo "#993333";}else{echo "black";}?>;color:white;">
</form>
<form method="post" action="manuplate.php?cl=Tulip&ad=<?php echo $ad_id;?>&id=<?php echo $id;?>">
    <input id="Done and Return" type="submit" value="Tulip" style="float:right;width:10%;font-size:15px;background:<?php if($cl == 'Tulip'){echo "#339966";}else{echo "black";}?>;color:white;">
</form>
<form method="post" action="indiv.php?ad=<?php echo $ad_id;?>&id=<?php echo $id;?>" style="float:left;width:10%" hidden>
    <input id="All" type="submit" value="All" style="width:100%;font-size:15px;background:black;color:white;">
</form>
</div><br><br>
<table style="width:100%">
 <tr style="background:black; color:white;border: 1px solid white;">
  <th style="border: 1px solid white;">ID</th>
  <th style="border: 1px solid white;">STUDENT NAME</th>
  <th style="border: 1px solid white;">Class</th>
  <th style="border: 1px solid white;">Mark</th></tr>
  
  <form method="post" action="manup.php?tid=<?php echo $id;?>&ad=<?php echo $ad_id;?>&cl=<?php echo $cl;?>">
  <?php $sel2 = $con->query("SELECT * FROM registery WHERE `Active`= 0 AND `Class`= '$cl'");
  while($row5 = $sel2->fetch_array()):?>
  <tr style="font-weight:bold;background:#99ffcc; color:black;border: 1px solid white;">
   <td style="border: 1px solid white;"><?php echo "MW".$row5['Id']?></td>
   <td style="border: 1px solid white;"><?php echo $row5['FName']?></td>
   <td style="border: 1px solid white;"><?php echo $row5['Class']?></td>
   
    <td style="border: 1px solid white; width:150px">
       <input  type="number" name="<?php echo $row5['Id'];?>" style="text-align:center;width:92%;" 
       <?php $nwd = $row5['Id'];
       $sel3 = $con->query("SELECT * FROM result WHERE `SID`='$nwd' AND `TID`='$id'");
       if($sel3->num_rows > 0){
        while($nnr = $sel3->fetch_array()){
          $nr = intval($nnr['Result']);
          echo "value= $nr";}
       }else{echo "required";}?>>
    </td>
  </tr>
  <?php endwhile;?>
</table><br>
<input type="number" name="outa" style="text-align:center;width:9%;font-size:20px;"
 <?php $sel4 = $con->query("SELECT * FROM `tests` WHERE `Id`='$id'");
 while($row4=$sel4->fetch_array()){
  if($row4["OutOf"] !='0'){
    echo "value =".intval($row4["OutOf"]); 
  }
 }?> required>
   
<input type="submit" name="update" value="Update" style="width:90%;font-size:20px;background:#000055;color:white;">
    </form>
</div></center>
</body>
</html>
<?php endwhile;?>