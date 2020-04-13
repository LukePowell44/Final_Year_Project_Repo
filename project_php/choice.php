    <?php
    include('session.php');
    if(!isset($_SESSION['login_user'])){
    header("location: index.php"); 
    }
    ?>

 <?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "project";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `staff_user";
$result1 = mysqli_query($connect, $query);

   
$user_check = $_SESSION['login_user'];
$sqlq = "SELECT cho1, cho2, cho3 FROM student_user WHERE `student_user`.`email` = ('$user_check')";
$result = $conn->query($sqlq);
  while($row = $result->fetch_assoc()) {
        $test = $row["cho1"];
        $test2 = $row["cho2"];
        $test3 = $row["cho3"];
    }
    if($test != 0){
 $sqlq = "SELECT forename, surname FROM staff_user WHERE staff_ID = ('$test')";
$result2 = $conn->query($sqlq);
while($row2 = $result2->fetch_assoc()) {
        $res =  $row2["forename"].' '.$row2["surname"];
    }}
      if($test == 0){
        $res = "No Choice Submitted";      
}
 if($test2 != 0){
 $sqlq2 = "SELECT forename, surname FROM staff_user WHERE staff_ID = ('$test2')";
$result3 = $conn->query($sqlq2);
while($row3 = $result3->fetch_assoc()) {
        $res2 =  $row3["forename"].' '.$row3["surname"];
    }}
      if($test2 == 0){
        $res2 = "No Choice Submitted";      
}
if($test3 != 0){
 $sqlq3 = "SELECT forename, surname FROM staff_user WHERE staff_ID = ('$test3')";
$result4 = $conn->query($sqlq3);
while($row4 = $result4->fetch_assoc()) {
        $res3 =  $row4["forename"].' '.$row4["surname"];
    }}
      if($test3 == 0){
        $res3 = "No Choice Submitted";      
}

$conn->close();

?>

<!DOCTYPE html>

<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
<meta charset="utf-8">
<title>search</title>
<link rel="stylesheet" type="text/css" href="./style.css">

      
        <style>

            table,tr,td
            {
                border: 2px solid black;
                width: 100%;
                text-align:center;
            }
            th
            {
               border: 2px solid black;
               text-align:center;
            }

        </style>


    </head>

   <body style="background-color:#8DB6DF;">
     <div class="topnav">
           <a href="./topics.php">Topics</a>
            <a href="./search.php">Search</a>
            <a class="active" href="./choice.php">Choice</a>
             <a href="./Supervisor.php">Supervisor</a>
            <a id="logout" href="logout.php">Log out</a>
 
</div> 
<div class="searchtitle2"><h1 style="font-size:6vw;">Choose Your Top Supervisor!</h1></div>
      <div class="subhed2"><h2 style="font-size:3vw; margin-left:8%;">Select your top 3 choices!</h2></div>
      



<div  id="myDIV">
 <form action="" method="post" > 
<div style="background-color: #2196F3; ">
 <table class="tablechoose" style="overflow-y:scroll; 
    display:block; height:40%;table-layout:fixed; margin-top: 5%; " >
<thead>
<tr class="red">
<th class="thead">Supervisor ID</th>
<th class="thead">First Name</th>
<th class="thead">Last Name</th>
 <th class="thead">Check</th>
 </tr>
</thead>
 <?php while($row1 = mysqli_fetch_array($result1)):;?>
<tr >
<td class="test0"><?php echo $row1[0];?></td>
<td class="test1" ><?php echo $row1[2];?></td>
 <td class="test2"><?php echo $row1[3];?></td>
 <td class="test3"><input type="checkbox" name="techno[]" value=<?php echo $row1[0], $row1[2];?>></td>

</tr>
<?php endwhile;?>
 <tr>  
      
</tr> 
</table>

 </div>
 <div style="color:White; font-weight:bold;  text-shadow: 1px 1px black;">First Choice =
  <?php 

  echo $res;?>

</div>
<div style="color:White; font-weight:bold;  text-shadow: 1px 1px black;">Second Choice = 
  <?php
  echo $res2;?>
</div>
<div style="color:White; font-weight:bold;  text-shadow: 1px 1px black;">Third Choice =
  <?php
  echo $res3;?></div>

<div>
<td colspan="4" align="center"><input type="submit" value="Submit First Choice" name="sub1" id="sub1" class="btn btn-info">
  <input type="submit" value="Submit Second Choice" name="sub2" id="sub2" class="btn btn-info">
  <input type="submit" value="Submit Third Choice" name="sub3" id="sub3" class="btn btn-info"></td> </div>
</div> 
</form>
</body>
<?php 
$host="localhost"; 
$username="root"; 
$word="";  
$db_name="project";  
$tbl_name="student_user";   
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect"); 
if(isset($_POST['techno'])) { 
$checkbox1=$_POST['techno'];  
$chk="";  
 $user_check = $_SESSION['login_user']; 
if(isset($_POST['sub1']))  
{  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1."";  
   }  
$check = "SELECT cho1, supervisor_allocated FROM student_user WHERE `student_user`.`email` = ('$user_check')";
$result = mysqli_query($con, $check);
$row = mysqli_fetch_assoc($result);
$check2 = "SELECT FREQ, forename, staff_ID FROM staff_user WHERE `staff_user`.`staff_ID` = ('$chk')";
$result2 = mysqli_query($con, $check2);
$row2 = mysqli_fetch_assoc($result2);
if(($row["cho1"] == 0)){
  if($row2["FREQ"] < 5){
$in_ch=mysqli_query($con,"UPDATE `student_user` SET `cho1` = ('$chk') WHERE `student_user`.`email` = ('$user_check')"); 
$testy = mysqli_query($con, "UPDATE `staff_user` SET `FREQ` = `FREQ`+1 WHERE `staff_user`.`staff_ID` = ('$chk')");
$update=mysqli_query($con,"UPDATE `student_user` SET `supervisor_allocated` = `cho1` WHERE `student_user`.`email` = ('$user_check')");
if($in_ch==1)  
   {  
      echo'<script>alert("First Choice Submitted!")</script>';
      
   }  
else  
   {  
      echo'<script>alert("Oops there was a problem...")</script>';  
   } 
 }
 if($row2["FREQ"] >= 5){  
  $in_ch=mysqli_query($con,"UPDATE `student_user` SET `cho1` = ('$chk') WHERE `student_user`.`email` = ('$user_check')"); 
if($in_ch==1)  
   {  
      echo'<script>alert("First Choice Submitted!")</script>';  
   }  
else  
   {  
      echo'<script>alert("Oops there was a problem...")</script>';  
   } 
  }
   }
 if(($row["cho1"] != 0)){  
   
         echo'<script>alert("First Choice Already Submitted")</script>';
   } 
}
echo "<meta http-equiv='refresh' content='0'>";
if(isset($_POST['sub2']))  
{  

foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1."";  
   }  
$check = "SELECT cho1, cho2, cho3, supervisor_allocated FROM student_user WHERE `student_user`.`email` = ('$user_check')";
$result = mysqli_query($con, $check);
$row = mysqli_fetch_assoc($result);
$check2 = "SELECT FREQ FROM staff_user WHERE `staff_user`.`staff_ID` = ('$chk')";
$result2 = mysqli_query($con, $check2);
$row2 = mysqli_fetch_assoc($result2);
if(($row["cho2"] == 0)){
$in_ch=mysqli_query($con,"UPDATE `student_user` SET `cho2` = ('$chk') WHERE `student_user`.`email` = ('$user_check')");
if($row2["FREQ"] < 5){ 
    if(($row["supervisor_allocated"] == 0)){
$testy = mysqli_query($con, "UPDATE `staff_user` SET `FREQ` = `FREQ`+1 WHERE `staff_user`.`staff_ID` = ('$chk')");
$update=mysqli_query($con,"UPDATE `student_user` SET `supervisor_allocated` = `cho2` WHERE `student_user`.`email` = ('$user_check')");
if($in_ch==1)  
   {  
      echo'<script>alert("Second Choice Submitted!")</script>';  
   }  
else  
   {  
      echo'<script>alert("Oops there was a problem...")</script>';  
   } 

 }
 if(($row["supervisor_allocated"] != 0)){if($in_ch==1)  
   {  
      echo'<script>alert("Second Choice Submitted!")</script>';  
   }  
else  
   {  
      echo'<script>alert("Oops there was a problem...")</script>';  
   }}
}  
 if($row2["FREQ"] >= 5){  
      $in_ch=mysqli_query($con,"UPDATE `student_user` SET `cho2` = ('$chk') WHERE `student_user`.`email` = ('$user_check')");
  
if($in_ch==1)  
   {  
      echo'<script>alert("Second Choice Submitted!")</script>';  
   }  
else  
   {  
      echo'<script>alert("Oops there was a problem...")</script>';  
   } 
 
   }
   }
 if(($row["cho2"] != 0)){  
   
         echo'<script>alert("Second Choice Already Submitted")</script>';
   } 
}


if(isset($_POST['sub3']))  
{  

foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1."";  
   }  
$check = "SELECT cho1, cho2, cho3, supervisor_allocated FROM student_user  WHERE `student_user`.`email` = ('$user_check')";
$result = mysqli_query($con, $check);
$row = mysqli_fetch_assoc($result);
$check2 = "SELECT FREQ FROM staff_user WHERE `staff_user`.`staff_ID` = ('$chk')";
$result2 = mysqli_query($con, $check2);
$row2 = mysqli_fetch_assoc($result2);

if(($row["cho3"] == 0)){
if($row2["FREQ"] < 5){ 
    if(($row["supervisor_allocated"] == 0)){
$in_ch=mysqli_query($con,"UPDATE `student_user` SET `cho3` = ('$chk') WHERE `student_user`.`email` = ('$user_check')");
$testy = mysqli_query($con, "UPDATE `staff_user` SET `FREQ` = `FREQ`+1 WHERE `staff_user`.`staff_ID` = ('$chk')");
$update=mysqli_query($con,"UPDATE `student_user` SET `supervisor_allocated` = `cho3` WHERE `student_user`.`email` = ('$user_check')");
if($in_ch==1)  
   {  
      echo'<script>alert("Third Choice Submitted!")</script>';  
   }  
else  
   {  
      echo'<script>alert("Oops there was a problem...")</script>';  
   } 

 }
 if(($row["supervisor_allocated"] != 0)){
$in_ch=mysqli_query($con,"UPDATE `student_user` SET `cho3` = ('$chk') WHERE `student_user`.`email` = ('$user_check')");
    if($in_ch==1)  
   {  
      echo'<script>alert("Third Choice Submitted!")</script>';  
   }  
else  
   {  
      echo'<script>alert("Oops there was a problem...")</script>';  
   }}
}
  
 if($row2["FREQ"] >= 5){  
       
 if(($row["supervisor_allocated"] == 0)){
    echo'<script>alert("Supervisor Unavailable\nPlease select another choice!")</script>'; 

   }}
   }
 if(($row["cho3"] != 0)){  
   
         echo'<script>alert("Third Choice Already Submitted")</script>'; 
   }     
}

 }


?> 
</html>
<script>
$(function(){
        $('form').each(function(){
                var frm=$(this);
                $(this).find('input[type=checkbox]').click(function(){
                        var len=$(frm).find('input[type=checkbox]:checked').length;
                        if(len>1)
                        {
                               
                                $(this).attr('checked',false);
                                alert('You can only select 1 values from each form');
                              $(frm).find('input[type=checkbox]').attr('disabled',true);
                        }      
                });
        });
});

</script>
