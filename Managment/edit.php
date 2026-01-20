<?php 
$con = new mysqli("localhost","root","","register");
$id = $_GET['id'];

$sel = $con->query("SELECT * FROM `Admin` WHERE `Id`='$id'");

$ad_id = $_GET['ad'];
?>
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
    <title>Registry</title>
</head>
<body style="background:#A92029;">
<div style="box-shadow:10px 10px 10px 10px #540004; background-image: linear-gradient(crimson, black);border-top-style:solid;border-left-style:solid;border-right-style:solid;">
<form method="post" action="../manage.php">
  <span style="border-radius:0px;background:#552222;float:left;width:15%;color:white;text-align:center;font-size:24px;"><?php echo $row_sp["Admin"];?></span>
  <input type="submit" value="Log Out" style="border-radius:0px;float:right;width:85%;font-size:20px;background:#552222;color:white;padding-right:10px">
</form>
<table><tr ><th><img style="width:150px;" src="main.png"></th>
<th><h1 style="color:yellow;font-size:40px;font-weight:bold;margin-bottom:1px">MULTI-WAY SCHOOL OF LANGUAGE</h1><span style="color:white;">THE WAY TO A BRIGHT FUTURE!!</span></span></th>
</tr></table>
</div><br><br>

<?php while($row = $sel->fetch_array()):?>
<div style="box-shadow:10px 10px 10px 10px #540004; height:380px;background:white;border:5px solid black;float:left;width:98%;">
<h2 style="background:black;color:white;padding:30px 50px 10px 10px;font-size:28px"> Admin Name :  <span style="padding-left:60px;color:yellow"><?php echo $row['Admin'];?></span><span style="float:right"> Admin Password : <span style="padding-left:60px;color:red"><?php echo $row['Password'];?></span></span>
</h2><br>
<table>
 <tr style="background:black;color:white;">
  <th style="border: 1px solid white;text-align:center">Admin</th>
  <th style="border: 1px solid white;text-align:center">Permissions</th>
 </tr>
 <tr style="border: 1px solid black;">
  <td>
   <center><form method="post" action="admin_change.php?ad=<?php echo $ad_id;?>&id=<?php echo $id;?>" style="height:100%;width:100%">
    <input name="user" type="text" style="text-align:center;font-size:20px;width:50%" value="<?php echo $row["Admin"]?>"><br>
    <input name="pwd" type="text" style="text-align:center;margin-top:10px;font-size:20px;width:50%" value="<?php echo $row["Password"]?>"><br>
    <input name="submit" type="submit" value="Change Admin" style="margin-top:10px;font-size:20px; width:50%; color:white;background:#770077">
  </form></center>
  </td>

  <td style="width:300px">
  <center>
    <?php if($row['Register'] == 0 ):?>
    <form method="post" action="change.php?ad=<?php echo $ad_id;?>&type=Registration&id=<?php echo $id;?>" style="height:100%;">
     <input type="text" style="text-align:center;background:black;color:white;border:2px solid black;width:100px;" value="Registration" disabled> :
     <input name="submit" type="submit" value="No" style="float:right;width:150px; color:white;background:Red">
    </form><br><?php endif;?>
    <?php if($row['Register'] == 1 ):?>
    <form method="post" action="unchange.php?ad=<?php echo $ad_id;?>&type=Registration&id=<?php echo $id;?>" style="height:100%;">
     <input type="text" style="text-align:center;background:black;color:white;border:2px solid black;width:100px;" value="Registration" disabled> :
     <input name="submit" type="submit" value="Yes" style="float:right;width:150px; color:white;background:Green">
    </form><br><?php endif;?>

    <?php if($row['Payment'] == 0 ):?>
    <form method="post" action="change.php?ad=<?php echo $ad_id;?>&type=Payment&id=<?php echo $id;?>" style="height:100%">
    <input type="text" style="text-align:center;background:black;color:white;border:2px solid black;width:100px;" value="Payment" disabled> :
     <input name="submit" type="submit" value="No" style="float:right;width:150px; color:white;background:Red">
    </form><br><?php endif;?>
    <?php if($row['Payment'] == 1 ):?>
    <form method="post" action="unchange.php?ad=<?php echo $ad_id;?>&type=Payment&id=<?php echo $id;?>" style="height:100%">
    <input type="text" style="text-align:center;background:black;color:white;border:2px solid black;width:100px;" value="Payment" disabled> :
     <input name="submit" type="submit" value="Yes" style="float:right;width:150px; color:white;background:Green">
    </form><br><?php endif;?>

    <?php if($row['Result'] == 0 ):?>
    <form method="post" action="change.php?ad=<?php echo $ad_id;?>&type=Result&id=<?php echo $id;?>" style="height:100%">
     <input type="text" style="text-align:center;background:black;color:white;border:2px solid black;width:100px;" value="Result" disabled> :
     <input name="submit" type="submit" value="No" style="float:right;width:150px; color:white;background:Red">
    </form><br><?php endif;?>
    <?php if($row['Result'] == 1 ):?>
    <form method="post" action="unchange.php?ad=<?php echo $ad_id;?>&type=Result&id=<?php echo $id;?>" style="height:100%">
     <input type="text" style="text-align:center;background:black;color:white;border:2px solid black;width:100px;" value="Result" disabled> :
     <input name="submit" type="submit" value="Yes" style="float:right;width:150px; color:white;background:Green">
    </form><br><?php endif;?>
    
    <?php if($row['Manage'] == 0 ):?>
    <form method="post" action="change.php?ad=<?php echo $ad_id;?>&type=Managment&id=<?php echo $id;?>" style="height:100%">
     <input type="text" style="text-align:center;background:black;color:white;border:2px solid black;width:100px;" value="Managment" disabled> :
     <input name="submit" type="submit" value="No" style="float:right;width:150px; color:white;background:Red">
    </form><br><?php endif;?>
    <?php if($row['Manage'] == 1 ):?>
    <form method="post" action="unchange.php?ad=<?php echo $ad_id;?>&type=Managment&id=<?php echo $id;?>" style="height:100%">
     <input type="text" style="text-align:center;background:black;color:white;border:2px solid black;width:100px;" value="Managment" disabled> :
     <input name="submit" type="submit" value="Yes" style="float:right;width:150px; color:white;background:Green">
    </form><br><?php endif;?>

    <?php if($row['Others'] == 0 ):?>
    <form method="post" action="change.php?ad=<?php echo $ad_id;?>&type=Others&id=<?php echo $id;?>" style="height:100%">
     <input type="text" style="text-align:center;background:black;color:white;border:2px solid black;width:100px;" value="Others" disabled> :
     <input name="submit" type="submit" value="No" style="float:right;width:150px; color:white;background:Red">
    </form><br><?php endif;?>
    <?php if($row['Others'] == 1 ):?>
    <form method="post" action="unchange.php?ad=<?php echo $ad_id;?>&type=Others&id=<?php echo $id;?>" style="height:100%">
     <input type="text" style="text-align:center;background:black;color:white;border:2px solid black;width:100px;" value="Others" disabled> :
     <input name="submit" type="submit" value="Yes" style="float:right;width:150px; color:white;background:Green">
    </form><br><?php endif;?>
  </center>
  </td>
 </tr>
</table>
<form method="post" action="admin.php?ad=<?php echo $ad_id;?>" style="width:100%">
  <input id="Log In" type="submit" value="Go Back" style="width:100%;font-size:20px;margin-top:5px;background:#000044;color:white;height:40px;border-radius:5px;border:1px solid black;">
</form>
</div>
<?php endwhile;?>

</body>
</html>
<?php endwhile;?>