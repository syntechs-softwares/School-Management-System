<?php 
$con = new mysqli("localhost","root","","register");

$sel = $con->query("SELECT * FROM registery WHERE `Active`= 0");
$ad_id = $_GET['ad'];?>

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
<div style="overflow:scroll;border:1px solid black;background:white;height:420px"><br>
<table>
       <tr>
        <th style="background:black;color:white;border: 1px solid white;">ID</th>
        <th style="background:black;color:white;border: 1px solid white;">Full Name</th>
        <th style="background:black;color:white;border: 1px solid white;width:30px;"><center>Sex</center></th>
        <th style="background:black;color:white;border: 1px solid white;width:30px;">Grade</th>
        <th style="background:black;color:white;border: 1px solid white;">Class</th>
        <th style="background:black;color:white;border: 1px solid white;">Shift</th>
        <th style="background:black;color:white;border: 1px solid white;">Phone Number</th>
       </tr>
      <form method="post" action="delete_con.php?ad=<?php echo $ad_id;?>">
        <?php while($row = $sel->fetch_array()):?>
      <tr style="font-weight: bold;">
        <td style="border: 1px solid white;background:
        <?php if ($row["Class"] == "Tulip"){
            echo "#339966";
        }
        elseif ($row["Class"] == "Wit"){
            echo "#993333";
        }
        elseif ($row["Class"] == "Stunning"){
          echo "#3366cc";
        }
        elseif ($row["Class"] == "Impeccable"){
          echo "#003300";
        }?>;color:white;">
        <?php echo "MW".$row["Id"];?>

        <input type="radio" style="float:right;accent-color:blue;" name="<?php echo $row["Id"];?>" value="0" checked>

        <input type="radio" style="border:0px;width: 20px; height: 20px;float:right;accent-color:red;" name="<?php echo $row["Id"];?>" value="1">
        </td>

        
        <td style="border: 1px solid white;background:
        <?php if ($row["Class"] == "Tulip"){
            echo "#339966";
        }
        elseif ($row["Class"] == "Wit"){
            echo "#993333";
        }
        elseif ($row["Class"] == "Stunning"){
          echo "#3366cc";
        }
        elseif ($row["Class"] == "Impeccable"){
          echo "#003300";
        }?>;color:white;"><?php echo $row["FName"]?></td>
        
        
        
        <td style="border: 1px solid white;background:
        <?php if ($row["Class"] == "Tulip"){
            echo "#339966";
        }
        elseif ($row["Class"] == "Wit"){
            echo "#993333";
        }
        elseif ($row["Class"] == "Stunning"){
          echo "#3366cc";
        }
        elseif ($row["Class"] == "Impeccable"){
          echo "#003300";
        }?>;color:white;"><center><img src="<?php if($row["Gender"]=="M"){echo "male.png";}else{echo "female.png";}?>" style="width:20px"></center></td>
        
        
        <td style="border: 1px solid white;background:
        <?php if ($row["Class"] == "Tulip"){
            echo "#339966";
        }
        elseif ($row["Class"] == "Wit"){
            echo "#993333";
        }
        elseif ($row["Class"] == "Stunning"){
          echo "#3366cc";
        }
        elseif ($row["Class"] == "Impeccable"){
          echo "#003300";
        }?>;color:white;"><?php echo $row["Level"];?></td>

        
        <td style="border: 1px solid white;background:
        <?php if ($row["Class"] == "Tulip"){
            echo "#339966";
        }
        elseif ($row["Class"] == "Wit"){
            echo "#993333";
        }
        elseif ($row["Class"] == "Stunning"){
          echo "#3366cc";
        }
        elseif ($row["Class"] == "Impeccable"){
          echo "#003300";
        }?>;color:white;"><?php echo $row["Class"]." ".$row["Locker"];?></td>

        
        <td style="border: 1px solid white;background:
        <?php if ($row["Class"] == "Tulip"){
            echo "#339966";
        }
        elseif ($row["Class"] == "Wit"){
            echo "#993333";
        }
        elseif ($row["Class"] == "Stunning"){
          echo "#3366cc";
        }
        elseif ($row["Class"] == "Impeccable"){
          echo "#003300";
        }?>;color:white;"><?php echo $row["Shift"];?></td>
        
        
        <td style="border: 1px solid white;background:
        <?php if ($row["Class"] == "Tulip"){
            echo "#339966";
        }
        elseif ($row["Class"] == "Wit"){
            echo "#993333";
        }
        elseif ($row["Class"] == "Stunning"){
          echo "#3366cc";
        }
        elseif ($row["Class"] == "Impeccable"){
          echo "#003300";
        }?>;color:white;"><?php echo $row["Contact"];?></td>
      </tr>
      <?php endwhile;?>
      </table><br>
      <input style="background:Red;color:white;width:100%;font-size:24px;" type="submit" value="Delete Selected">
      </form><br><br>
</div>
</body>
</html>
<?php endwhile;?>