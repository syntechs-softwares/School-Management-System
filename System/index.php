<?php 
$con = new mysqli("localhost","root","","register");
$sel = $con->query("SELECT * FROM registery WHERE `Active`= 0");

$ad_id = $_GET['ad'];?>
<!DOCTYPE html>

<?php $sel_sp = $con->query("SELECT * FROM `admin` WHERE `Id`='$ad_id'");
while($row_sp = $sel_sp->fetch_array()):?>
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
    <div>
        <div style="box-shadow:10px 10px 10px 10px #540004;overflow:scroll;background:white;float:left; width:20%; height:355px; border-style: solid; padding: 3% 3% 3% 3% "">
        <form method="post" action="reg.php?ad=<?php echo $ad_id;?>">
          <div style="font-weight: bold; color:white; padding:5px 5px 5px 1px;width:98%;background-image:linear-gradient(to right,crimson,black);padding-left:5px;margin-bottom:5px"> Full name : </div> 
            <input  type="text" name="fname" style="float:right;width:98%;" required placeholder="First Name"><br><br>
            <input  type="text" name="mname" style="float:right;width:98%;" required placeholder="Father's Name"><br><br>
            <input  type="text" name="lname" style="float:right;width:98%;" placeholder="Grandfather's Name"><br><br>

          <div style="font-weight: bold; color:white; padding:5px 5px 5px 1px;background-image:linear-gradient(to right,crimson,black);padding-left:5px;margin-bottom:5px">Phone Number : </div> 
          <input  type="text" name="contact" style="width:98%;" value="Not Registered" required><br><br>
          
          <div style="border:1px solid black;height:20px">
          <span style="font-weight: bold; color:crimson;float:left;">
          <input type="radio" name="gender" value="M" required> Male</span>
          <span style="font-weight: bold; color:crimson;float:right;padding-right:7px">
          <input type="radio" name="gender" value="F" required> Female</span></div><br><br>
          
          <span style="font-weight: bold; color:crimson; padding:5px 5px 5px 1px;">Shift : </span> 
          <select name="shift3" style="float:right;width:23%">
           <option value="PM">PM</option>
           <option value="AM">AM</option>
          </select>
          <select name="shift2" style="float:right;width:23%">
           <option value="30">30</option>
           <option value="00">00</option>
          </select>
          <select name="shift1" style="float:right;width:23%">
           <option value="11">11</option>
           <option value="12">12</option>
           <option value="01">01</option>
           <option value="02">02</option>
           <option value="03">03</option>
           <option value="04">04</option>
           <option value="05">05</option>
           <option value="06">06</option>
           <option value="07">07</option>
           <option value="08">08</option>
           <option value="09">09</option>
           <option value="10">10</option>
          </select><br><br>

          <span style="font-weight: bold; color:crimson; padding:5px 5px 5px 1px;">Class  : </span> 
          <div style="float:right;width:70%">
          <select name="class" style="width:80%">
           <option value="Tulip">Tulip</option>
           <option value="Wit">Wit</option>
           <option value="Stunning">Stunning</option>
           <option value="Impeccable">Impeccable</option>
          </select>
          <input type="number" name="subl" style="text-align:center;float:right;width:15%" value = 1 min=1></div><br><br>
          
          <span style="font-weight: bold; color:crimson; padding:5px 5px 5px 1px;">Level : </span>
          <select name="acadamy" style="float:right;width:70%">
           <option value="NAN">NAN</option>
           <option value="1st">1st</option>
           <option value="2nd">2nd</option>
           <option value="3rd">3rd</option>
           <option value="4th">4th</option>
           <option value="5th">5th</option>
           <option value="6th">6th</option>
           <option value="7th">7th</option>
           <option value="8th">8th</option>
           <option value="9th">9th</option>
           <option value="10th">10th</option>
           <option value="11th">11th</option>
           <option value="12th">12th</option>
           <option value="12+">12+</option>
          </select><br><br>
          
          <div style="font-weight: bold; color:white; padding:5px 5px 5px 1px;background-image:linear-gradient(to right,crimson,black);padding-left:5px;">Registration Date : </div>
          <div style="padding-top: 5px;">
          <input type="date" name="date" style="width:99%" required><br><br><br>
          </div>
          <span style="font-weight: bold; color:crimson; padding:5px 5px 5px 1px;">Student Type : </span>
          <select name="stype" style="float:right;width:50%">
           <option value="NO">Normal</option>
           <option value="SPer">Special Permit</option>
           <option value="SPO">Sponsored</option>
          </select><br><br>
          
        
          <div style="font-weight: bold; color:white; padding:5px 5px 5px 1px;">
          <input id="Register" type="submit" value="Register" style="width:100%;font-size:20px;background-image: linear-gradient(black,crimson);color:white;" <?php if($row_sp["Register"] == '0'){echo "disabled";}?>>
          </div></form>
      </div>
      
      <div style="box-shadow:10px 10px 10px 10px #540004;overflow:scroll;background:white;float:right; width:65%; height:355px; border-style: solid; padding: 3% 3% 3% 3% ">
      <div>
        <form method="post" action="main_indiv.php?cl=Impeccable&ad=<?php echo $ad_id;?>">
          <input id="Done and Return" type="submit" value="Impeccable" style="float:right;width:10%;font-size:15px;background:black;color:white;">
        </form>
        
        <form method="post" action="main_indiv.php?cl=Stunning&ad=<?php echo $ad_id;?>">
          <input id="Done and Return" type="submit" value="Stunning" style="float:right;width:10%;font-size:15px;background:black;color:white;">
        </form>
        
        <form method="post" action="main_indiv.php?cl=Wit&ad=<?php echo $ad_id;?>">
          <input id="Done and Return" type="submit" value="Wit" style="float:right;width:10%;font-size:15px;background:black;color:white;">
        </form>

        <form method="post" action="main_indiv.php?cl=Tulip&ad=<?php echo $ad_id;?>">
          <input id="Done and Return" type="submit" value="Tulip" style="float:right;width:10%;font-size:15px;background:black;color:white;">
        </form>

        <form method="post" action="index.php?ad=<?php echo $ad_id;?>" style="float:left;width:10%">
          <input id="All" type="submit" value="All" style="width:100%;font-size:15px;background:Red;color:white;">
        </form><br><br></div>
        <h2 style="background:black;color:white;padding:5px 5px 5px 5px"> Student List
        <form method="post" action="delete_all.php?ad=<?php echo $ad_id;?>" style="float:right;">
          <input type="submit" value="Delete" style="margin-left:5px;border:none;background:Red;color:white;font-size:22px;padding-left:10px;padding-right:10px" <?php if($row_sp["Register"] == '0'){echo "disabled";}?>>
        </form>
        <form method="post" action="unactives.php?ad=<?php echo $ad_id;?>" style="float:right;">
          <input type="submit" value="Pending" style="border:none;background:#CCCCCC;color:black;font-size:22px;padding-left:10px;padding-right:10px" <?php if($row_sp["Register"] == '0'){echo "disabled";}?>>
        </form>
        </h2>
      <form method="post" action="main_search.php?ad=<?php echo $ad_id;?>">
        <div><input type="text" name="search" style="width:75%;font-size:20px;" required>
        <input type="submit" value="Search" style="width:20%;font-size:20px;float:right;background:#006600;color:white;"></div>
      </form><br>
      <table>
       <tr>
        <th style="background:black;color:white;border: 1px solid white;">ID</th>
        <th style="background:black;color:white;border: 1px solid white;">Full Name</th>
        <th style="background:black;color:white;border: 1px solid white;width:30px;"><center>Sex</center></th>
        <th style="background:black;color:white;border: 1px solid white;width:30px;">Grade</th>
        <th style="background:black;color:white;border: 1px solid white;">Date</th>
        <th style="background:black;color:white;border: 1px solid white;">Class</th>
        <th style="background:black;color:white;border: 1px solid white;">Shift</th>
        <th style="background:black;color:white;border: 1px solid white;">Phone Number</th>
       </tr>
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
        <form method="post" action="upgrade.php?ad=<?php echo $ad_id;?>&id=<?php echo $row["Id"]?>">
        <input style="background:
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
        }?>;color:white;"type="submit" value="<?php echo "MW".$row["Id"]?>"></form></td>

        
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
        }?>;color:white;"><?php echo $row["RDate"];?></td>


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
      </table>
      

      </div>
    </div>
</body>
</html>
<?php endwhile;?>