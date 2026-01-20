<?php 
$con = new mysqli("localhost","root","","register");
$sel = $con->query("SELECT * FROM registery");

$inc1 = 0;  
$inc2 = 0;

$sel_val2 = $con->query("SELECT * FROM `Money`");
while($row_val2 = $sel_val2->fetch_array()){
    $inc1 = intval($row_val2["Pay"]);
    $inc2 = intval($row_val2["Reg"]);
}
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
::-webkit-scrollbar {
  border-radius:20px
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registry</title>
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
      <?php if($row_sp["Others"] == '1'):?>
      <form method="post" action="day_report.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%">
          <input id="Payment" type="submit" value="Report" style="height:100%;width:100%;font-size:20px;padding-top:2px;background:black;color:white;">
      </form>
      
      <?php if($row_sp["Register"] == '1'):?>
      <form method="post" action="index.php?ad=<?php echo $ad_id;?>" style="float:left;height:100%;width:100%">
          <input id="Registration" type="submit" value="Registration" style="height:100%;width:100%;font-size:20px;padding-top:2px;">
      </form><?php endif;?>
      
      <?php if($row_sp["Payment"] == '1'):?>
      <form method="post" action="payment.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%">
          <input id="Payment" type="submit" value="Payment" style="height:100%;width:100%;font-size:20px;padding-top:2px;">
      </form><?php endif;?>
      
      <?php if($row_sp["Result"] == '1'):?>
      <form method="post" action="result.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%">
          <input id="Payment" type="submit" value="Assessment" style="height:100%;width:100%;font-size:20px;padding-top:2px;">
      </form><?php endif;?>
      
      <?php endif;?>
      <?php if($row_sp["Register"] == '1'):?>
      <form method="post" action="teachers.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%">
          <input id="Results List" type="submit" value="Teachers & Expenses" style="height:100%;width:100%;font-size:20px;padding-top:2px;" >
      </form><?php endif;?>
    </div></th>
</tr></table>
</div><br><br><br>
<center><div style="box-shadow:10px 10px 10px 10px #540004; height:380px;background:black;border:5px solid black;float:left;width:18%">
<br><form method="post" action="day_report.php?ad=<?php echo $ad_id;?>" style="height:26%;width:100%">
          <input name="submit" type="submit" value="Daily Report" style="border:1px solid white;height:100%;font-size:30px; width:99%; color:white;background:#770077"><br><br><br>
      </form><br>
      <form method="post" action="month_report.php?ad=<?php echo $ad_id;?>" style="height:26%;width:100%">
          <input name="submit" type="submit" value="Monthly Report" style="border:1px solid white;height:100%;font-size:30px; width:99%; color:white;background:#770077"><br><br><br>
      </form><br>
      <form method="post" action="more.php?ad=<?php echo $ad_id;?>" style="height:26%;width:100%">
          <input name="submit" type="submit" value="More" style="border:1px solid white;height:100%;font-size:30px; width:99%; color:white;background:black"><br><br><br>
      </form>
</center>
<div style="overflow:scroll;box-shadow:10px 10px 10px 10px #540004;height:380px;background:white;border:5px solid black;float:right;width:80%">
<table>
<tr style="color:white;background:black">
      <th style="background:black;color:white;border-left: 1px none black;text-align:center;width:25%;">Payment Per Student</th>
      <th style="background:black;color:white;border-left: 1px solid white;text-align:center;width:25%;">Payment Per New Student</th>
      <th style="background:black;color:white;border-left: 1px solid white;text-align:center;width:25%;">Payment Per NEW Special Permit Student</th>
      <th style="background:black;color:white;border-left: 1px solid white;text-align:center;width:25%;">Payment Per Special Permit Student</th>
    </tr>
    <?php $sel2 = $con->query("SELECT * FROM `Money`");
     while($row = $sel2->fetch_array()):?>
    <tr>
     <td style="background:#4d0000;color:white;border: 1px solid white;width:20%">
       <center><form method="post" action="price.php?ad=<?php echo $ad_id;?>&af=pay">
          <input type="number" name="pay" style="font-weight:bold;color:#335577;font-size:24px;width:75%;text-align:center"value="<?php echo $row["Pay"];?>">
          <input type="submit" style="background:#335577;color:white;font-size:20px;width:75%;margin-top:5px" value="Change">
       </form></center>
     </td>

     <td style="background:#4d0000;color:white;border: 1px solid white;width:20%">
       <center><form method="post" action="price.php?ad=<?php echo $ad_id;?>&af=reg">
          <input type="number" name="reg" style="font-weight:bold;color:#335577;font-size:24px;width:75%;text-align:center"value="<?php echo $row["Reg"];?>">
          <input type="submit" style="background:#335577;color:white;font-size:20px;width:75%;margin-top:5px" value="Change">
       </form></center>
     </td>

     <td style="background:#4d0000;color:white;border: 1px solid white;width:27%">
       <center><form method="post" action="price.php?ad=<?php echo $ad_id;?>&af=rspe">
          <input type="number" name="rspe" style="font-weight:bold;color:#335577;font-size:24px;width:75%;text-align:center"value="<?php echo $row["Spe_Reg"];?>">
          <input type="submit" style="background:#335577;color:white;font-size:20px;width:75%;margin-top:5px" value="Change">
       </form></center>
     </td>

     <td style="background:#4d0000;color:white;border: 1px solid white;width:27%">
       <center><form method="post" action="price.php?ad=<?php echo $ad_id;?>&af=spe">
          <input type="number" name="spe" style="font-weight:bold;color:#335577;font-size:24px;width:75%;text-align:center"value="<?php echo $row["Spe"];?>">
          <input type="submit" style="background:#335577;color:white;font-size:20px;width:75%;margin-top:5px" value="Change">
       </form></center>
     </td>
    </tr>
    <?php endwhile;?>
</div>
</body>
<py-script>
</py-script>
</html>
<?php endwhile;?>