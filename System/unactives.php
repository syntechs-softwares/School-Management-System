<?php 
$con = new mysqli("localhost","root","","register");

$ad_id = $_GET['ad'];

$day = intval(date("d"));
$month = intval(date("m"));
$year = intval(date("Y"));

$time = $day+($month*30)+($year*365.25);

$sel = $con->query("SELECT * FROM registery WHERE `Active` = 0");
?>
<?php $sel_sp = $con->query("SELECT * FROM `admin` WHERE `Id`='$ad_id'");
while($row_sp = $sel_sp->fetch_array()):?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
h1,h2,h3,h4,h5,h6{
  border-radius: 20px;
}
div {
 border-radius: 20px;
}

input {
  border-radius: 20px;
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
<?php if($row_sp["Register"] == '1'):?>
      <form method="post" action="index.php?ad=<?php echo $ad_id;?>" style="float:left;height:100%;width:100%">
          <input id="Registration" type="submit" value="Registration" style="height:100%;width:100%;font-size:20px;padding-top:2px;background:black;color:white;">
      </form><?php endif;?>
      
      <?php if($row_sp["Payment"] == '1'):?>
      <form method="post" action="payment.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%">
          <input id="Payment" type="submit" value="Payment" style="height:100%;width:100%;font-size:20px;padding-top:2px;">
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
    <div style="padding:1% 1% 1% 1%;background:white; box-shadow: 10px 10px 10px 10px #540004;height:410px; overflow:scroll;border:5px solid black">
    <h2 style="font-weight:bold;background:black;color:white;padding:5px 5px 5px 10px"> Inactive People
      <span style="float:right;"><form method="post" action="index.php?ad=<?php echo $ad_id;?>"> 
        <input type="submit" value="Return" style="font-size:20px;background:#008800;color:white;width:200px">
      </form></span></h2><br>
      <form method="post" action="unactives_search.php?ad=<?php echo $ad_id;?>">
        <div><input type="text" name="search" style="width:75%;font-size:20px;" required>
        <input type="submit" value="Search" style="width:20%;font-size:20px;float:right;background:#006600;color:white;"></div>
      </form><br>
      <table>
       <tr>
        <th style="background:black;color:white;border: 1px solid white;">ID</th>
        <th style="background:black;color:white;border: 1px solid white;">Full Name</th>
        <th style="background:black;color:white;border: 1px solid white;">Last Time Stay</th>
        <th style="background:black;color:white;border: 1px solid white;">Activation Day</th>
        <th style="background:black;color:white;border: 1px solid white;">CHECKER</th>
       </tr>
      <?php $sel2 = $con->query("SELECT * FROM registery WHERE `Active` = 1");
      while($row2 = $sel2->fetch_array()):?>
      <tr style="background:#555500;color:white">
        <td style="border: 1px solid white;"><?php echo "MW".$row2['Id'];?></td>
        <td style="border: 1px solid white;"><?php echo $row2['FName'];?></td>
        <td style="border: 1px solid white"><?php if($row2['Stay']==1){echo $row2['Stay']." Month";}
        else{echo $row2['Stay']." Months";}?></td>
        <td style="border: 1px solid white;width:200px;"><form method="post" action="activate.php?id=<?php echo $row2['Id'];?>&ad=<?php echo $ad_id;?>">
           <input type="date" name="Date" style="width:100%" required></td> 
           <td style="border: 1px solid white; width:250px"><input type="submit" value="Acivate" style="font-size:24px; background:#330000;color:white;width:100%" <?php if($row_sp["Register"] == '0'){echo "disabled";}?>></td>
        </form>
      </tr>
      <?php endwhile;?>
      </table>
    </div>
</body>
</html>
<?php endwhile;?>