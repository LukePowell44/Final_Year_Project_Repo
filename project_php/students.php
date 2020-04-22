    <?php
    include('session2.php');
    if(!isset($_SESSION['login_user2'])){
    header("location: index.php"); 
    }


    ?>





<!doctype html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
            <a href="./staffportal.php">Staff Portal</a>
             <a class="active" href="./students.php">Students</a>
            <a id="logout" href="logout.php">Log out</a>

 
</div> 
<div class="searchtitle2"><h1 style="font-size:8vw;">Allocated Students</h1></div>
      <div class="subhed2"><h2 style="font-size:3vw;">Click email to being contact!</h2></div>
        <div  id="myDIVw">
 <form action="" method="post" > 

<div style="background-color: #2196F3;">
        <table class="tablechoose" style="overflow-y:scroll; 
   
   display:block; height:120px; width: max-content;"
   >
<thead>
            <tr class="red" style="align-content: center;">
      <th class="thead" align-content: center;">Email</th>

                <th class="thead" >Forename</th>
                 <th class="thead" >Surname</th>
 
            </tr>
</thead>
           
<?php
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_check = $_SESSION['login_user2'];
$sqlq = "SELECT staff_ID FROM staff_user WHERE `staff_user`.`email` = ('$user_check')";
$result = $conn->query($sqlq);
  while($row = $result->fetch_assoc()) {
        $test = $row["staff_ID"];
    }
    if($test > 0){
 $sqlq = "SELECT email, forename, surname, supervisor_allocated FROM student_user WHERE supervisor_allocated = ('$test')";
$result2 = $conn->query($sqlq);
while($row2 = $result2->fetch_assoc()) {
        $fname =  $row2["forename"];
        $lname = $row2["surname"];
        $email = $row2["email"];    ?>
         <tr>
     <td class="testt0" > <?php printf('<a style="color:white;" href="mailto:%s">', $row2['email'] ); ?><?php echo $row2['email'];?></a></td>
    <td  class="testt1"><?php echo $row2['forename']; ?></td>
    <td class="testt2"><?php echo $row2['surname']; ?></td>
  

    </tr>
    <?php
          
    }}
      if($test == 0){
        $fname =  "forename";
        $lname ="surname";
        $email = "email";      
}
$conn->close();

while($row2 = $result2->fetch_assoc()){
if ($result2->num_rows > 0) {

    ?>

   
    <?php
}} 
if ($result2->num_rows == 0) {

    ?>
    <tr>
     <td class="testt0"> <?php echo "Student Email Not Assigned"; ?></td>
    <td  class="testt1"><?php echo "Student Forename Not Assigned"; ?></td>
    <td class="testt2"><?php echo "Student Surname Not Assigned"; ?></td>
  

    </tr>
    <?php
} ?>



        </table>
 </div>
     

      </div> 
</body>
</html>