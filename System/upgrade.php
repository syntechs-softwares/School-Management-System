<?php 
$con = new mysqli("localhost","root","","register");

$ad_id = $_GET['ad'];
$id = $_GET['id'];?>

<?php $sel_sp = $con->query("SELECT * FROM `Admin` WHERE `Id`='$ad_id'");
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
      <form method="post" action="index.php?ad=<?php echo $ad_id;?>" style="float:left;height:100%;width:100%">
          <input id="Registration" type="submit" value="Go Back" style="height:100%;width:100%;font-size:20px;padding-top:2px;background:black;color:white;">
      </form><?php endif;?>
    </div>
    </th></tr></table>
</div><br>
<center>
<div style="overflow-vertical:scroll;border:1px solid black;background-image:linear-gradient(to right,#540004, #540004);"><br>
<form method="post" action="upgrade_con.php?ad=<?php echo $ad_id;?>&id=<?php echo $id;?>">
<table style="width:100%">
<?php $sel = $con->query("SELECT * FROM `registery` WHERE `Id`='$id'");
while($row = $sel->fetch_array()):?>
 <tr style="background-image:linear-gradient(to right,#540004, #540004);; color:white;">
  <th style="border: 1px none white;color:black">
   <div style="border:1px solid white;background:black;color:white;padding:5px 5px 5px 5px;font-size:24px;">NAME: 
   <input type="text" name="name" style="text-align:center;float:right;color:#005500;font-size:24px;" value="<?php echo $row['FName'];?>"></div><br><br>
   
   <div style="border:1px solid white;font-size:20px;background:black;color:white;padding:5px 5px 5px 5px;width:47%;float:left">Telephone: <input type="text" name="contact" style="font-size:20px;width:250px;text-align:center;color:black;float:right;" value="<?php echo $row['Contact'];?>"></div>
   
   <div style="border:1px solid white;font-size:20px;background:black;color:white;padding:5px 5px 5px 5px;width:47%;float:right"><span>Shift: 
    <input type="text" style="font-size:20px;float:right;text-align:center" name="shift" value="<?php echo $row["Shift"];?>">
    </div><br><br><br><br>
   
    <div style="border:1px solid white;font-size:20px;background:black;color:white;padding:5px 5px 5px 5px;width:35%;float:left"><span>Acadamic Grade: 
    <select name="acadamy" style="font-size:20px;float:right;width:50%">
           <option value="NAN" <?php if($row['Level']=="NAN"){echo "selected";}?>>NAN</option>
           <option value="1st" <?php if($row['Level']=="1st"){echo "selected";}?>>1st</option>
           <option value="2nd" <?php if($row['Level']=="2nd"){echo "selected";}?>>2nd</option>
           <option value="3rd" <?php if($row['Level']=="3rd"){echo "selected";}?>>3rd</option>
           <option value="4th" <?php if($row['Level']=="4th"){echo "selected";}?>>4th</option>
           <option value="5th" <?php if($row['Level']=="5th"){echo "selected";}?>>5th</option>
           <option value="6th" <?php if($row['Level']=="6th"){echo "selected";}?>>6th</option>
           <option value="7th" <?php if($row['Level']=="7th"){echo "selected";}?>>7th</option>
           <option value="8th" <?php if($row['Level']=="8th"){echo "selected";}?>>8th</option>
           <option value="9th" <?php if($row['Level']=="9th"){echo "selected";}?>>9th</option>
           <option value="10th" <?php if($row['Level']=="10th"){echo "selected";}?>>10th</option>
           <option value="11th" <?php if($row['Level']=="11th"){echo "selected";}?>>11th</option>
           <option value="12th" <?php if($row['Level']=="12th"){echo "selected";}?>>12th</option>
           <option value="12+" <?php if($row['Level']=="12+"){echo "selected";}?>>12+</option>
          </select>
    </div>
   
    <div style="border:1px solid white;font-size:20px;background:black;color:white;padding:5px 5px 5px 5px;width:35%;float:right">
    <span>Student Type: 
    <select name="type" style="font-size:20px;float:right;width:50%">
           <option value="NO" <?php if($row['SType']=="NO"){echo "selected";}?>>Normal</option>
           <option value="SPer" <?php if($row['SType']=="SPer"){echo "selected";}?>>Special Permit</option>
           <option value="SPO" <?php if($row['SType']=="SPO"){echo "selected";}?>>Sponsored</option>>
          </select></div>
   
    <center><div style="font-size:20px;background:black;color:white;padding:5px 5px 5px 5px;width:25%"><span>Sub-Level: <input type="number" name="sub" style="font-size:20px;text-align:center;color:#003d99;" value="<?php echo $row['Locker'];?>"></div></center><br><br>
   </th></tr>
  <?php endwhile;?>
</table><br><br>
        <input style="background:#227722;color:white;width:100%;font-size:24px;" type="submit" value="Confirm Edits">
    </form>
</div></center>
</body>
</html>
<?php endwhile;?>