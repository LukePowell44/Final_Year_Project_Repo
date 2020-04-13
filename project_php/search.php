    <?php
    include('session.php');
    if(!isset($_SESSION['login_user'])){
    header("location: index.php"); 
    }
    ?>
<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM staff_user";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $string2 = str_replace(" ", "_", $_GET['search']);
    $sql = "SELECT * FROM staff_user WHERE area LIKE '%$string2%'";

}
$result = $con->query($sql);
?>
<!doctype html>
<html>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

 <style>

            table,th,tr
            {
                border: 2px solid black;
                width: 100%;
                text-align:center;
            }
            td{
                
                border: 2px solid black;
            }

        </style>
<head>
<meta charset="utf-8">
<title>search</title>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body style="background-color:#8DB6DF;">
	 <div class="topnav">
		   <a href="./topics.php">Topics</a>
			<a class="active" href="./search.php">Search</a>
  			<a href="./choice.php">Choice</a>
 			 <a href="./supervisor.php">Supervisor</a>
			<a id="logout" href="logout.php">Log out</a>
 
</div> 
<div class="searchtitle"><h1 style="font-size:8vw;">Search Supervisors!</h1></div>

    <br/>
	

<div class="containersearch" class="card card-sm">

<form action="" method="GET">
<input class="sbar" type="text" placeholder="Search to Find Supervisor" name="search">&nbsp;
<input  type="submit" value="Search" name="btn" class="btn btn-sm btn-primary" style=" background-color:#2196F3;
      border-color: #357EC7;   border-radius: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);" id="testbut">
</form>

<table class="table table-striped table-responsive"  id="showres">
<tr>
<th style="width:25%;">Forename</th>
<th style="width:25%;">Surname</th>
<th style="width:25%;">Email</th>
<th style="width:30%;">Area</th>
</tr>
<input class="refresh"  type="button" value="Refresh" onclick="window.location.href='search.php'" />
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['forename']; ?></td>
    <td><?php echo $row['surname']; ?></td>
    <td><?php echo $row['email']; ?></td>
     <td><?php 
    $spacer = $row['area'];
    $string = str_replace("_", " ", $spacer);
    echo $string; ?></td>

    </tr>
    <?php
}
?>
</table>

</body>
</html>
