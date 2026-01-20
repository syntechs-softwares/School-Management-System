<?php 
$con = new mysqli("localhost","root","","register");
$cl = $_GET['cl'];

$sel = $con->query("SELECT * FROM registery WHERE `Active`= 0 AND `Class`='$cl'");
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
<div style="box-shadow: 10px 10px #DC143C; background-image: linear-gradient(crimson, black);border-top-style:solid;border-left-style:solid;border-right-style:solid;">
<form method="post" action="../index.php">
  <span style="border-radius:0px;background:#552222;float:left;width:15%;color:white;text-align:center;font-size:24px;"><?php echo $row_sp["Admin"];?></span>
  <input type="submit" value="Log Out" style="border-radius:0px;float:right;width:85%;font-size:20px;background:#552222;color:white;padding-right:10px">
</form>
<table><tr ><th><img style="width:150px;" src="main.png"></th>
<th><h1 style="color:yellow;font-size:40px;font-weight:bold;margin-bottom:1px">MULTI-WAY SCHOOL OF LANGUAGE</h1><span style="color:white;">THE WAY TO A BRIGHT FUTURE!!</span></span></th>
<th style="width:300px"><div style="float:right;height:40px;width:300px;overflow:auto">
      <?php if($row_sp["Result"] == '1'):?>
      <form method="post" action="result.php?ad=<?php echo $ad_id;?>" style="float:right;height:100%;width:100%">
          <input id="Payment" type="submit" value="Assessment" style="height:100%;width:100%;font-size:20px;padding-top:2px;background:black;color:white;">
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
        <div style="box-shadow: 10px 10px 10px 10px #DC143C;background:white;float:left; width:20%; height:355px; border-style: solid; padding: 3% 3% 3% 3% ">
        <form method="post" action="trans.php?ad=<?php echo $ad_id;?>">
          <input id="+" type="submit" value="+" style="width:100%;font-size:24px;color:white;background:#000055" <?php if($row_sp["Result"] == '0'){echo "disabled";}?>>
        </form><br>
        <div style="overflow:scroll;height:335px;">
          <?php $sel2 = $con->query("SELECT * FROM tests WHERE `Scored`=1 ORDER BY `Id` DESC");while($row3 = $sel2->fetch_array()):?>
           <center><form method="post" action="indiv.php?id=<?php echo $row3["Id"]; ?>&ad=<?php echo $ad_id;?>">
            <input id="Exam<?php echo $row3["Date"];?>" type="submit" value="Exam <?php echo $row3["Date"];?>" style="width:75%;font-size:16px;color:white;background:#555555" <?php if($row_sp["Result"] == '0'){echo "disabled";}?>>
           </form></center><br>
          <?php endwhile;?>
      </div>
      </div>
      
      <div style="box-shadow: 10px 10px 10px 10px #DC143C;overflow:scroll;background:white;float:right; width:65%; height:355px; border-style: solid; padding: 3% 3% 3% 3% ">
      <div>
        <form method="post" action="result_Indiv.php?cl=Impeccable&ad=<?php echo $ad_id;?>">
          <input id="Done and Return" type="submit" value="Impeccable" style="float:right;width:10%;font-size:15px;background:<?php if($cl == 'Impeccable'){echo "#003300";}else{echo "black";}?>;color:white;">
        </form>
        
        <form method="post" action="result_Indiv.php?cl=Stunning&ad=<?php echo $ad_id;?>">
          <input id="Done and Return" type="submit" value="Stunning" style="float:right;width:10%;font-size:15px;background:<?php if($cl == 'Stunning'){echo "#3366cc";}else{echo "black";}?>;color:white;">
        </form>
        
        <form method="post" action="result_Indiv.php?cl=Wit&ad=<?php echo $ad_id;?>">
          <input id="Done and Return" type="submit" value="Wit" style="float:right;width:10%;font-size:15px;background:<?php if($cl == 'Wit'){echo "#993333";}else{echo "black";}?>;color:white;">
        </form>
        
        <form method="post" action="result_Indiv.php?cl=Tulip&ad=<?php echo $ad_id;?>">
          <input id="Done and Return" type="submit" value="Tulip" style="float:right;width:10%;font-size:15px;background:<?php if($cl == 'Tulip'){echo "#339966";}else{echo "black";}?>;color:white;">
        </form>
        
        <form method="post" action="result.php?ad=<?php echo $ad_id;?>" style="float:left;width:10%">
          <input id="All" type="submit" value="All" style="width:100%;font-size:15px;background:black;color:white;">
        </form><br><br></div>
        <h2 style="background:black;color:white;padding:5px 5px 5px 5px"> Average Result
      </h2>
      <form method="post" action="result_Indiv_search.php?cl=<?php echo $cl;?>&ad=<?php echo $ad_id;?>">
        <div><input type="text" name="search" style="width:75%;font-size:20px;" required>
        <input type="submit" value="Search" style="width:20%;font-size:20px;float:right;background:#006600;color:white;"></div>
      </form><br>
      <table>
       <tr>
        <th style="background:black;color:white;border: 1px solid white;">ID</th>
        <th style="background:black;color:white;border: 1px solid white;">Full Name</th>
        <th style="background:black;color:white;border: 1px solid white;">Class</th>
        <th style="background:black;color:white;border: 1px solid white;">Average</th>
        <th style="background:black;color:white;border: 1px solid white;">Status</th>
       </tr>
       <?php $sel3 = $con->query("SELECT * FROM `average` WHERE `Class`='$cl' ORDER BY `Average` DESC");
      while($row3 = $sel3->fetch_array()):?>
      <tr style="font-weight: bold;border: 1px solid white;background:
        
        <?php if ($row3["Class"] == "Tulip"){
            echo "#339966";
        }
        elseif ($row3["Class"] == "Wit"){
            echo "#993333";
        }
        elseif ($row3["Class"] == "Stunning"){
          echo "#3366cc";
        }
        elseif ($row3["Class"] == "Impeccable"){
          echo "#003300";
        }?>;color:white;">
        
        <td style="border: 1px solid white;"><?php echo "MW".$row3["Id"]?></td>
        <td style="border: 1px solid white;"><?php echo $row3["Name"]?></td>
        <td style="border: 1px solid white;"><?php echo $row3["Class"];?></td>
        <td style="border: 1px solid white;"><?php echo $row3["Average"]."%";?></td>
        <td style="border: 1px solid white;width:200px"><form method="post" action="uplevel.php?id=<?php echo $row3['Id']?>&ad=<?php echo $ad_id;?>" style="float:left; width:90px">
           <input id="UP LEVEL" type="submit" value="UP" style="width:100%;" <?php if($row_sp["Result"] == '0'){echo "disabled";}?>>
         </form>
         <form method="post" action="downlevel.php?id=<?php echo $row3['Id']?>&ad=<?php echo $ad_id;?>" style="float:right; width:90px">
           <input id="DOWN LEVEL" type="submit" value="DOWN" style="width:100%;" <?php if($row_sp["Result"] == '0'){echo "disabled";}?>>
         </form></td>
      </tr>
      <?php endwhile;?>
      </table>
      

      </div>
    </div>
</body>
</html>
<?php endwhile;?>