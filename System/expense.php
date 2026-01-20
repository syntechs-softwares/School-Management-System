<?php 
$con = new mysqli("localhost","root","","register");
$sel = $con->query("SELECT * FROM registery");
$ad_id = $_GET['ad'];
$inc1 = 0;  
$inc2 = 0;

$sel_val2 = $con->query("SELECT * FROM `Money`");
while($row_val2 = $sel_val2->fetch_array()){
    $inc1 = intval($row_val2["Pay"]);
    $inc2 = intval($row_val2["Reg"]);
}?>
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
      <?php if($row_sp["Register"] == '1'):?>
      <form method="post" action="teachers.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%">
          <input id="Results List" type="submit" value="Teachers & Expenses" style="height:100%;width:100%;font-size:20px;padding-top:2px;background:black;color:white;" >
      </form><?php endif;?>
      
      <?php if($row_sp["Result"] == '1'):?>
      <form method="post" action="result.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%">
          <input id="Payment" type="submit" value="Assessment" style="height:100%;width:100%;font-size:20px;padding-top:2px;">
      </form><?php endif;?>

      <?php if($row_sp["Register"] == '1'):?>
      <form method="post" action="index.php?ad=<?php echo $ad_id;?>" style="float:left;height:100%;width:100%">
          <input id="Registration" type="submit" value="Registration" style="height:100%;width:100%;font-size:20px;padding-top:2px;">
      </form><?php endif;?>
      
      <?php if($row_sp["Payment"] == '1'):?>
      <form method="post" action="payment.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%">
          <input id="Payment" type="submit" value="Payment" style="height:100%;width:100%;font-size:20px;padding-top:2px;">
      </form><?php endif;?>
      
      <?php if($row_sp["Others"] == '1'):?>
      <form method="post" action="day_report.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%"">
          <input id="Payment" type="submit" value="Report" style="height:100%;width:100%;font-size:20px;padding-top:2px;">
      </form><?php endif;?>
    </div></th>
</tr></table>
</div><br><br><br>

<div style="box-shadow:10px 10px #540004;height:49%;background:white">
      <form method="post" action="expense.php?ad=<?php echo $ad_id;?>" style="height:100%;width:50%%">
          <input name="submit" type="submit" value="Expenses" style="border-radius:0px;height:50px;float:right;font-size:24px;width:50%;background:black;color:white;">
        </form>
        <form method="post" action="teachers.php?ad=<?php echo $ad_id;?>" style="height:100%;width:50%">
          <input name="submit" type="submit" value="Teachers" style="border-radius:0px;height:50px;font-size:24px;width:100%;">
      </form>
</div><br>

<center><div style="box-shadow:10px 10px 10px 10px #540004; height:325px;background:white;border:5px solid black;float:left;width:18%">
<form method="post" action="expense_add.php?ad=<?php echo $ad_id;?>"><br><br>
<div style="width:90%;font-weight: bold; color:white; padding:5px 5px 5px 1px;background-image:linear-gradient(to right,crimson,black);padding-left:5px;margin-bottom:5px"> Expense</div> 
<input  type="text" name="name" style="width:90%;text-align:center;" required><br><br>
<div style="width:90%;"><span style="float:left;font-weight: bold; color:crimson;width:47%;padding-left:5px;"> Amount :  </span> 
<input  type="number" name="per" style="float:right;width:98%;text-align:center;width:47%;" required><br><br>
</div>
<input id="Register" type="submit" value="Add Expense" style="width:98%;font-size:20px;background-image: linear-gradient(black,crimson);color:white;"></form></div></center>
<div style="width:90%;overflow:scroll;box-shadow:10px 10px 10px 10px #540004;height:325px;background:white;border:5px solid black;float:right;width:80%">
<table>
    <tr style="color:white;background:black">
      <th style="background:black;color:white;border-left: 1px none black;text-align:center">Date</th>
      <th style="background:black;color:white;border-left: 1px solid white;">Expense</th>
      <th style="background:black;color:white;border-left: 1px solid white;">Amount</th>
    </tr>
    <?php $sel2 = $con->query("SELECT * FROM `expense` ORDER BY `Id` DESC");
     while($row = $sel2->fetch_array()):?>
    <tr>
    <td style="background:#4d0000;color:white;border: 1px solid white;"><?php echo $row["Day"]."-".$row["Month"]."-".$row["Year"];?></td>
    <td style="background:#4d0000;color:white;border: 1px solid white;"><?php echo $row["Expense"];?></td>
       <td style="background:#4d0000;color:white;border: 1px solid white;"><?php echo $row["Amount"]." Birr";?></td>
    </tr>
    <?php endwhile;?>
</table>
<div>
</body>
</html>
<?php endwhile;?>