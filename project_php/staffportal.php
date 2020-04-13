 <?php
    include('session2.php');
    if(!isset($_SESSION['login_user2'])){
    header("location: index.php");
    }
    ?>
 <?php



$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "project";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);


$query = "SELECT * FROM `course_area";

$result1 = mysqli_query($connect, $query);




?>
<!doctype html>
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
	 <div class="topnavstaff">
  			<a class="active" href="./staffportal.php">Staff Portal</a>
 			 <a href="./students.php">Students</a>
			<a id="logout" href="logout.php">Log out</a>
 
</div> 
<div class="searchtitle2"><h1 style="font-size:8vw;">Choose Your Area!</h1></div>
	  <div class="subhed2"><h2 style="font-size:3vw;">Select your areas of research</h2></div>
	 <button id="portbut" onclick="myFunction()" class="btn btn-info">Click to Choose</button>



        <div  id="myDIVq">
 <form action="" method="post" > 
<!-- Table One -->
<div style="background-color: #2196F3;">
        <table class="tablechoose" style="overflow-y:scroll; 
   
   display:block; height:100px; width: max-content;"
   >
<thead>
            <tr class="red" style="align-content: center;">
      <th class="thead" align-content: center;">Area ID</th>

                <th class="thead" >Area</th>
                 <th class="thead" >Check</th>
 
            </tr>
</thead>
            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <tr >
                <td class="test0" style="width:15%;"><?php echo $row1[0];?></td>
                <td class="test1" style="width:75%;"><?php echo $row1[1];?></td>

                              <?php
                
                $string = str_replace(" ", "_", $row1[1]);?>
                <td style="width:10%;"><input type="checkbox" name="techno[]" value=<?php echo $string;?>></td>

            </tr>

            <?php endwhile;?>
   <tr>  
      
   </tr> 
        </table>
 </div>
        <br><br>
<td colspan="4" align="center"><input type="submit" value="submit choices" name="sub" id="sbut"class="btn btn-info"></td> 
      </div> 

      </form>
       
    </body>
<?php  
if(isset($_POST['sub']))  
{  
$host="localhost";
$username="root";   
$word="";
$db_name="project";
$tbl_name="student_user"; 
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");
$checkbox1=$_POST['techno'];  
$chk="";  
 $user_check = $_SESSION['login_user2'];
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

$in_ch=mysqli_query($con,"UPDATE `staff_user` SET `area` = ('$chk') WHERE `staff_user`.`email` = ('$user_check')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Choices Submitted!")</script>';  
   }  
else  
   {  
      echo'<script>alert("Oops there was a problem...")</script>';  
   }  
}  
?> 
</html>
<script type="text/javascript">
    $("#myDIV").hide();
</script>
<script>function myFunction() {
  var x = document.getElementById("myDIVq");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}</script>