<?php 
$con = new mysqli("localhost","root","","register");

$day = date('d');
$month = date('m');
$year = date('Y');

$sel = $con->query("SELECT * FROM registery WHERE `Active` = 0");
$sel2 = $con->query("SELECT * FROM `day_rep` WHERE `Day`='$day' AND `Month`='$month' AND `Year`='$year'");
$sel3 = $con->query("SELECT * FROM `mon_rep` WHERE `Month`='$month' AND `Year`='$year'");

if($sel2->num_rows == 0){
  $con->query("INSERT INTO `day_rep` (`Day`,`Month`,`Year`) VALUES('$day','$month','$year')");
}
if($sel3->num_rows == 0){
  $tot = $sel->num_rows;
  $con->query("INSERT INTO `mon_rep` (`Month`,`Year`,`Total`) VALUES('$month','$year','$tot')");
}?>
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
<table><tr ><th><img style="width:150px;" src="main.png"></th>
<th><h1 style="color:yellow;font-size:40px;font-weight:bold;margin-bottom:1px">MULTI-WAY SCHOOL OF LANGUAGE</h1><span style="color:white;">THE WAY TO A BRIGHT FUTURE!!</span></span></th>
<th style="width:200px"><div style="width:100%">
    <form method="post" action="manage.php" style="height:100%;width:100%">
          <input id="Manage Accounts" type="submit" value="Managment" style="width:100%;font-size:20px;padding-top:2px;background:black;color:white;height:50px">
      </form>
    </th></tr></table>
</div><br><br><br>

<div style="box-shadow:10px 10px 10px 10px #540004;background:white;border:5px solid black">
    <center><div style="width:800px">
        <form method="post" action="login.php" style="height:100%;width:100%"><br>
          <div style="float:left;box-shadow:4px 4px 4px 4px grey;padding:2px 5px 2px 10px;color:black;font-size:36px;background-image: linear-gradient(to left, white, #AAAADD);width:250px">User : </div>
          <input name="user" type="text" style="text-align:center;margin-left:5px;font-size:36px;;width:500px"><br><br><br>
          
          <div style="float:left;box-shadow:4px 4px 4px 4px grey;padding:2px 5px 2px 10px;color:black;font-size:36px;background-image: linear-gradient(to left, white, #AAAADD);width:250px">Password : </div>
          <input name="pwd" type="password" style="text-align:center;margin-left:5px;font-size:36px;;width:500px"><br><br><br>
        
          <input name="submit" type="submit" value="Login" style="margin-left:5px;font-size:36px; width:800px;color:white;background:#000077"><br><br><br>
      </form></div></center>
</div>
</body>
</html>