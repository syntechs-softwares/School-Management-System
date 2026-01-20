<?php 
$con = new mysqli("localhost","root","","register");
$test = $_GET["id"];

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
<div style="box-shadow:10px 10px 10px 10px #540004; background-image: linear-gradient(crimson, black);border-top-style:solid;border-left-style:solid;border-right-style:solid;">
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
        <div style="box-shadow:10px 10px 10px  10px #DC143C;background:white;float:left; width:20%; height:355px; border-style: solid; padding: 3% 3% 3% 3% ">
        <form method="post" action="trans.php?ad=<?php echo $ad_id;?>">
          <input id="+" type="submit" value="+" style="width:100%;font-size:24px;color:white;background:#000055">
        </form><br>
        <div style="overflow:scroll; height:335px;">
          <?php $sel2 = $con->query("SELECT * FROM tests WHERE `Scored`='1' ORDER BY `Id` DESC");while($row3 = $sel2->fetch_array()):?>
           <center><form method="post" action="indiv.php?id=<?php echo $row3["Id"]; ?>&ad=<?php echo $ad_id;?>">
            <input id="Exam <?php echo $row3["Date"];?>" type="submit" value="Exam <?php echo $row3["Date"];?>" style="width:75%;font-size:16px;color:white;background:#555555">
           </form></center><br>
          <?php endwhile;?>
      </div>
      </div>
      
      <div style="box-shadow:10px 10px 10px  10px #DC143C;overflow:scroll;background:white;float:right; width:65%; height:355px; border-style: solid; padding: 3% 3% 3% 3% ">
      <div>
        <form method="post" action="Indiv_Indiv.php?cl=Impeccable&id=<?php echo $test;?>&ad=<?php echo $ad_id;?>">
          <input id="Done and Return" type="submit" value="Impeccable" style="float:right;width:10%;font-size:15px;background:black;color:white;">
        </form>
        
        <form method="post" action="Indiv_Indiv.php?cl=Stunning&id=<?php echo $test;?>&ad=<?php echo $ad_id;?>">
          <input id="Done and Return" type="submit" value="Stunning" style="float:right;width:10%;font-size:15px;background:black;color:white;">
        </form>
        
        <form method="post" action="Indiv_Indiv.php?cl=Wit&id=<?php echo $test;?>&ad=<?php echo $ad_id;?>">
          <input id="Done and Return" type="submit" value="Wit" style="float:right;width:10%;font-size:15px;background:black;color:white;">
        </form>

        <form method="post" action="Indiv_Indiv.php?cl=Tulip&id=<?php echo $test;?>&ad=<?php echo $ad_id;?>">
          <input id="Done and Return" type="submit" value="Tulip" style="float:right;width:10%;font-size:15px;background:black;color:white;">
        </form>

        <form method="post" action="indiv.php?id=<?php echo $test;?>&ad=<?php echo $ad_id;?>" style="float:left;width:10%">
          <input id="All" type="submit" value="All" style="width:100%;font-size:15px;background:Red;color:white;">
        </form><br><br></div>
        <form method="post" action="result.php?ad=<?php echo $ad_id;?>" style="float:left;width:49%">
          <input id="Average" type="submit" value="Average" style="width:100%;font-size:20px;padding-top:2px;background:black;color:white;">
      </form>
      <form method="post" action="manuplate.php?cl=Tulip&ad=<?php echo $ad_id;?>&id=<?php echo $test;?>" style="float:right;width:49%">
          <input id="Average" type="submit" value="Edit Result" style="width:100%;font-size:20px;padding-top:2px;background:Green;color:white;">
      </form><br>
      
      <h2 style="background:black;color:white;padding:5px 5px 5px 5px"> 
       <span>Exam </span>
       <span style="float:right;"><?php $sel6=$con->query("SELECT * FROM tests WHERE `Id`=$test");
       while($rrow = $sel6->fetch_array()){
        echo $rrow["Date"];
        }?></span>
      </h2>
      <form method="post" action="indiv_search.php?id=<?php echo $test;?>&ad=<?php echo $ad_id;?>">
        <div><input type="text" name="search" style="width:75%;font-size:20px;" required>
        <input type="submit" value="Search" style="width:20%;font-size:20px;float:right;background:#006600;color:white;"></div>
      </form><br>
      <table>
       <tr>
        <th style="background:black;color:white;border: 1px solid white;">ID</th>
        <th style="background:black;color:white;border: 1px solid white;">Full Name</th>
        <th style="background:black;color:white;border: 1px solid white;">Class</th>
        <th style="background:black;color:white;border: 1px solid white;">Score</th>
        <th style="background:black;color:white;border: 1px solid white;">%</th>
       </tr>
      <?php $sel5= $con->query("SELECT * FROM result WHERE `TID`=$test ORDER BY `Result` DESC");
      while($row5=$sel5->fetch_array()):?>
      <?php $num = $row5["SID"];
        $sel = $con->query("SELECT * FROM registery WHERE `Id`= $num");
      while($row = $sel->fetch_array()):?>
      <tr style="font-weight: bold;border: 1px solid white;background:
        
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
        
        <td style="border: 1px solid white;"><?php echo "MW".$row["Id"]?></td>
        <td style="border: 1px solid white;"><?php echo $row["FName"]?></td>
        <td style="border: 1px solid white;"><?php echo $row["Class"];?></td>
        <td style="border: 1px solid white;"><?php echo $row5["Result"];?></td>
        <td style="border: 1px solid white;"><?php echo $row5["OutOf"]."%";?></td>
      </tr>
      <?php endwhile;?>
      <?php endwhile;?>
      </table>
      

      </div>
    </div>
</body>
</html>
<?php endwhile;?>