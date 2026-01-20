<?php 
$con = new mysqli("localhost","root","","register");
$sel = $con->query("SELECT * FROM registery");
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
</div><br><br><br>

<center><div style="box-shadow:10px 10px 10px 10px #540004; height:380px;background:white;border:5px solid black;float:left;width:59%">
  <br>
        <form method="post" action="create.php?ad=<?php echo $ad_id;?>" style="height:100%;width:100%"><br>
          <div style="float:left;box-shadow:4px 4px 4px 4px grey;padding:2px 5px 2px 10px;color:black;font-size:36px;background-image: linear-gradient(to left, white, #AAAADD);width:25%">User : </div>
          <input name="user" type="text" style="text-align:center;margin-left:50px;font-size:36px;width:55%" required><br><br><br>
          
          <div style="float:left;box-shadow:4px 4px 4px 4px grey;padding:2px 5px 2px 10px;color:black;font-size:36px;background-image: linear-gradient(to left, white, #AAAADD);width:25%">Password : </div>
          <input name="pwd" type="password" style="text-align:center;margin-left:50px;font-size:36px;width:55%" required><br><br><br>
        
          <input name="submit" type="submit" value="Create Admin" style="margin-left:5px;font-size:36px; width:99%; color:white;background:#770077"><br><br><br>
      </form>
</div></center>
<div style="box-shadow:10px 10px 10px 10px #540004;overview:scroll;height:380px;background:white;border:5px solid black;float:right;width:39%">
<table>
    <tr style="color:white;background:black">
      <th style="background:black;color:white;border-left: 1px none white;">No</th>
      <th style="background:black;color:white;border-left: 1px solid white;">Admin Name</th>
      <th style="background:black;color:white;border-left: 1px solid white;"></th>
      <th style="background:black;color:white;border-left: 1px solid white;"></th>
    </tr>
    <?php $sel2 = $con->query("SELECT * FROM `admin`");
     while($row = $sel2->fetch_array()):?>
    <tr>
       <td style="background:white;color:black;border: 1px solid black; width:50px"><?php echo $row["Id"];?></td>
       <td style="background:white;color:black;border: 1px solid black;"><?php echo $row["Admin"];?></td>
       <td style="background:white;color:black;border: 1px solid black;width:60px;">
         <form method="post" action="edit.php?id=<?php echo $row["Id"];?>&ad=<?php echo $ad_id;?>">
           <input type="submit" value="Edit" style="color:white; background:Blue; font-size: 20px;">
         </form>
       </td>
       
       <td style="background:white;color:black;border: 1px solid black;width:60px;">
        <form method="post" action="delete.php?id=<?php echo $row["Id"];?>&ad=<?php echo $ad_id;?>">
           <input type="submit" value="Delete" style="color:white; background:red; font-size: 20px;">
         </form>
        </td>
    </tr>
    <?php endwhile;?>
</table>
<div>
</body>
</html>
<?php endwhile;?>