    <?php
    include('session.php');
    if(!isset($_SESSION['login_user'])){
    header("location: index.php");
    }
    ?>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user_check = $_SESSION['login_user'];
$sqlq = "SELECT supervisor_allocated FROM student_user WHERE `student_user`.`email` = ('$user_check')";
$result = $conn->query($sqlq);
  while($row = $result->fetch_assoc()) {
        $test = $row["supervisor_allocated"];
    }
    if($test != 0){
 $sqlq = "SELECT email, forename, surname, area, directory FROM staff_user WHERE staff_ID = ('$test')";
$result2 = $conn->query($sqlq);
while($row2 = $result2->fetch_assoc()) {
        $res =  $row2["forename"].' '.$row2["surname"];
        $img = $row2["forename"];
        $area = $row2["area"];
        
        $example = $row2["email"].''.'.jpg';
        $directory = $row2["directory"]; 
        $email = $row2["email"];       
    }}
      if($test == 0){
        $res = "Supervisor Name";
        $img = "forename";
        $area = "TBD";
        $example ='blank'.''.'.jpg';
        $directory = 'https://staff.lincoln.ac.uk/'; 
        $email = NULL;       
}

$conn->close();

?>
    
<!doctype html>
<html>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<head>
<meta charset="utf-8">
<title>search</title>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body style="background-color:#8DB6DF;">
	 <div class="topnav">
		   <a href="./topics.php">Topics</a>
			<a href="./search.php">Search</a>
  			<a href="./choice.php">Choice</a>
 			 <a class="active" href="./supervisor.php">Supervisor</a>
			<a id="logout" href="logout.php">Log out</a>
 
</div> 
<div class="searchtitle"><h1 style="font-size:8vw;">Your Supervisor is...</h1></div>
<div class="container" style="margin-top: 5%;">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2><?php echo $res; ?></h2>
                   

                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <?php printf('<img class="img-circle img-responsive" src="./assets/%s"/>', $example); ?>
                        
                    </figure>
                </div>
            </div>            
            <div class="col-xs-12 divider text-center">
                <p><strong>AREA: </strong><?php echo $area; ?></p>
                <div class="col-xs-12 col-sm-4 emphasis">
                    
                 <?php printf('<a href="mailto:%s">', $email ); ?><button class="btn btn-success btn-block" style="background-color:#8DB6DF; border-color: #357EC7;">E-Mail</button></a>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                
                  <?php printf('<a href="%s" target="_blank">', $directory ); ?> <button class="btn btn-info btn-block" style="background-color:#8DB6DF; border-color: #357EC7;"><span class="fa fa-user"></span> View Profile </button></a>
                </div>

                </div>
            </div>
    	 </div>  

		</div>

	</div>

</body>
</html>



