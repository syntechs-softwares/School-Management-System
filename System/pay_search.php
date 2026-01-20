<?php 
$con = new mysqli("localhost","root","","register");

$ad_id = $_GET['ad'];

$day = intval(date("d"));
$month = intval(date("m"));
$year = intval(date("Y"));

$time = $day+($month*30)+($year*365.25);
$sel3= $con->query("SELECT * FROM registery");
while($row3 = $sel3->fetch_array()){
  $then =$row3['SDay']+(30*$row3['SMonth'])+(365.25*$row3['SYear']);
  $tot = $time - $then;
  $tot2 = $time - $then;
  $nd = $row3['Id'];
  $cnt1 = 30;
  $cnt2 = 27;

  if(($row3['SDay']== 1)&&($row3['SMonth']== 1)){
    $cnt1 = 30;
    $cnt2 = 27;
  }
  elseif(($row3['SDay'] != 1)&&($row3['SMonth']== 1)){
    $cnt1 = 29;
    $cnt2 = 26;
  }
  elseif($row3['SMonth']== 2){
    $cnt1 = 31;
    $cnt2 = 28;
  }
  elseif(($row3['SDay'] == 1)&&($row3['SMonth']== 3)){
    $cnt1 = 30;
    $cnt2 = 27;
  }
  elseif(($row3['SDay'] != 1)&&($row3['SMonth']== 3)){
    $cnt1 = 29;
    $cnt2 = 26;
  }
  elseif($row3['SMonth']== 4){
    $cnt1 = 30;
    $cnt2 = 27;
  }
  elseif(($row3['SDay'] == 1)&&($row3['SMonth']== 5)){
    $cnt1 = 30;
    $cnt2 = 27;
  }
  elseif(($row3['SDay'] != 1)&&($row3['SMonth']== 5)){
    $cnt1 = 29;
    $cnt2 = 26;
  }
  elseif($row3['SMonth']== 6){
    $cnt1 = 30;
    $cnt2 = 27;
  }
  elseif(($row3['SDay'] == 1)&&($row3['SMonth']== 7)){
    $cnt1 = 30;
    $cnt2 = 27;
  }
  elseif(($row3['SDay'] != 1)&&($row3['SMonth']== 7)){
    $cnt1 = 29;
    $cnt2 = 26;
  }
  elseif(($row3['SDay'] == 1)&&($row3['SMonth']== 8)){
    $cnt1 = 30;
    $cnt2 = 27;
  }
  elseif(($row3['SDay'] != 1)&&($row3['SMonth']== 8)){
    $cnt1 = 29;
    $cnt2 = 26;
  }
  elseif(($row3['SDay'] > 10)&&($row3['SMonth']== 9)){
    $cnt1 = 30;
    $cnt2 = 27;
  }
  elseif(($row3['SDay'] <= 10)&&($row3['SMonth']== 9)){
    $cnt1 = 35;
    $cnt2 = 32;
  }
  elseif(($row3['SDay'] == 1)&&($row3['SMonth']== 10)){
    $cnt1 = 30;
    $cnt2 = 27;
  }
  elseif(($row3['SDay'] != 1)&&($row3['SMonth']== 10)){
    $cnt1 = 29;
    $cnt2 = 26;
  }
  elseif($row3['SMonth']== 11){
    $cnt1 = 30;
    $cnt2 = 27;
  }
  elseif(($row3['SDay'] == 1)&&($row3['SMonth']== 12)){
    $cnt1 = 30;
    $cnt2 = 27;
  }
  elseif(($row3['SDay'] != 1)&&($row3['SMonth']== 12)){
    $cnt1 = 34.25;
    $cnt2 = 31.25;
  }
  
  if (($tot >= $cnt1)&&($row3['Con']=='0')){
    $con->query("UPDATE registery SET `Con` = '1', `PDay`='$day', `PMonth`='$month',`PYear`='$year' WHERE `Id` = '$nd'");
  }
  
  if (($tot2 >= $cnt2)&&($row3['PreCon']=='0')){
    $con->query("UPDATE registery SET `PreCon` = '1' WHERE `Id` = '$nd'");
  }
}
$sel = $con->query("SELECT * FROM registery WHERE `Active`= 0");
$input = strtoupper($_POST["search"]);?>
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
    <title>Registry</title>
</head>
<body style="background:#A92029;">
<div style="box-shadow:10px 10px #540004; background-image: linear-gradient(crimson, black);border-top-style:solid;border-left-style:solid;border-right-style:solid;">
<form method="post" action="../index.php">
  <span style="border-radius:0px;background:#552222;float:left;width:15%;color:white;text-align:center;font-size:24px;"><?php echo $row_sp["Admin"];?></span>
  <input type="submit" value="Log Out" style="border-radius:0px;float:right;width:85%;font-size:20px;background:#552222;color:white;padding-right:10px">
</form>
<table><tr ><th><img style="width:150px;" src="main.png"></th>
<th><h1 style="color:yellow;font-size:40px;font-weight:bold;margin-bottom:1px">MULTI-WAY SCHOOL OF LANGUAGE</h1><span style="color:white;">THE WAY TO A BRIGHT FUTURE!!</span></span></th>
<th style="width:300px"><div style="float:right;height:40px;width:300px;overflow:auto">
      <?php if($row_sp["Payment"] == '1'):?>
      <form method="post" action="payment.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%">
          <input id="Payment" type="submit" value="Payment" style="height:100%;width:100%;font-size:20px;padding-top:2px;background:black;color:white;">
      </form><?php endif;?>
      
      <?php if($row_sp["Register"] == '1'):?>
      <form method="post" action="index.php?ad=<?php echo $ad_id;?>" style="float:left;height:100%;width:100%">
          <input id="Registration" type="submit" value="Registration" style="height:100%;width:100%;font-size:20px;padding-top:2px;">
      </form><?php endif;?>
      
      <?php if($row_sp["Result"] == '1'):?>
      <form method="post" action="result.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%">
          <input id="Payment" type="submit" value="Assessment" style="height:100%;width:100%;font-size:20px;padding-top:2px;">
      </form><?php endif;?>
      
      <?php if($row_sp["Others"] == '1'):?>
      <form method="post" action="day_report.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%"">
          <input id="Payment" type="submit" value="Report" style="height:100%;width:100%;font-size:20px;padding-top:2px;">
      </form>
      
      <?php endif;?>
      <?php if($row_sp["Register"] == '1'):?>
      <form method="post" action="teachers.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%">
          <input id="Results List" type="submit" value="Teachers & Expenses" style="height:100%;width:100%;font-size:20px;padding-top:2px;" >
      </form><?php endif;?>
      </div>
    </th></tr></table>
</div><br>
    <div>
     <div style="box-shadow:10px 10px 10px 10px #540004;overflow:scroll;background:white;float:left; width:30%; height:355px; border-style: solid; padding: 3% 3% 3% 3% "">
        <h2 style="background:black;color:white;padding:5px 5px 5px 5px">All Students </h2>
        <form method="post" action="pay_search.php?ad=<?php echo $ad_id;?>">
        <div><input type="text" name="search" style="width:75%;font-size:20px;" required>
        <input type="submit" value="Search" style="width:20%;font-size:20px;float:right;background:#006600;color:white;"></div>
      </form><br>
        <table>
       <tr>
        <th style="background:black;color:white;border: 1px solid white;">ID</th>
        <th style="background:black;color:white;border: 1px solid white;">Full Name</th>
        <th style="background:black;color:white;border: 1px solid white;">Stat</th>
       </tr>
      <?php while($row = $sel->fetch_array()):?>
      <?php $name = strtoupper($row["FName"]);
      if(strpos($name, $input)!== false):?>
      <tr style="font-weight: bold; color:Black;
       <?php 
       if($row["PreCon"] == 1){
        echo "background: #ffff99;";
       }
       else{
        echo "background: white;";
       }?>">
        <td style="border: 1px solid black;"><?php echo "MW".$row['Id'];?></td>
        <td style="border: 1px solid black;"><?php echo $row['FName'];?></td>
        
        <td style="border: 1px solid black;width:75px">
        <form method="post" action="prepay.php?id=<?php echo $row['Id']?>&ad=<?php echo $ad_id;?>" style="float:left;height:100%;width:100%"">
          <input id="Prepaid" type="submit" value="Prepaid" style="width:100%;font-size:16px;padding-top:2px;" <?php if(($row["Prepay"]==1)||($row_sp["Payment"] == '0')){echo "disabled";}?> >
        </form>
        </td>
      </tr>
      <?php endif;?>
      <?php endwhile;?>
      </table>
      </div>
      
      <div style="box-shadow:10px 10px 10px 10px #540004;overflow:scroll;background:white;float:right; width:55%; height:355px; border-style: solid; padding: 3% 3% 3% 3% ">
      <h2 style="font-weight:bold;background:crimson;color:white;padding:5px 5px 5px 5px"> Unpaid Students </h2><br>
      <table>
       <tr>
        <th style="background:black;color:white;border: 1px solid white;">ID</th>
        <th style="background:black;color:white;border: 1px solid white;">Full Name</th>
        <th style="background:black;color:white;border: 1px solid white;">Payment Date</th>
        <th style="background:black;color:white;border: 1px solid white;">Registration Date</th>
        <th style="background:black;color:white;border: 1px solid white;">CHECKER</th>
       </tr>
      <?php $sel2 = $con->query("SELECT * FROM registery WHERE `Con`='1' AND `Active`= 0");
      while($row2 = $sel2->fetch_array()):?>
      <?php $name = strtoupper($row2["FName"]);
      if(strpos($name, $input)!== false):?>
      <tr style="background:<?php if($row2["Prepay"]==1){echo "#006699";}else{echo "crimson";}?>
      ;color:white">
        <td style="border: 1px solid white;"><?php echo "MW".$row2['Id'];?></td>
        <td style="border: 1px solid white;"><?php echo $row2['FName'];?></td>
        <td style="border: 1px solid white;"><?php echo $row2['SDay']."-".$row2['SMonth']."-".$row2['SYear'];?></td>
        <td style="border: 1px solid white;"><?php echo $row2['RDate'];?></td>
        <td style="border: 1px solid white;">
         <form method="post" action="paid.php?id=<?php echo $row2['Id'];?>&day=<?php echo $row2['PDay'];?>&month=<?php echo $row2['PMonth'];?>&year=<?php echo $row2['PYear'];?>&ad=<?php echo $ad_id;?>" style="float:left;width:<?php if($row2["Prepay"]==1){echo "100%";}else{echo "45%";}?>;">
           <input id="Paid" type="submit" value="<?php if($row2["Prepay"]==1){echo "Confirm";}else{echo "Paid";}?>" style="background:green;color:white;width:100%;font-size:15px;padding-top:2px;" <?php if($row_sp["Payment"] == '0'){echo "disabled";}?>>
         </form>
         
         <form method="post" action="delete.php?id=<?php echo $row2['Id'];?>&ad=<?php echo $ad_id;?>" style="float:right;width:45%;" <?php if($row2["Prepay"]==1){echo "hidden";}?>>
           <input id="Delete" type="submit" value="On Hold" style="background:#000066;color:white;width:100%;font-size:15px;padding-top:2px;" <?php if($row_sp["Payment"] == '0'){echo "disabled";}?>>
         </form>
        </td>
      </tr>
      <?php endif;?>
      <?php endwhile;?>
      </table>
    </div>
    </div>
</body>
</html>
<?php endwhile;?>