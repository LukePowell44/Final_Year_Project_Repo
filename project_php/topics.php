    <?php
    include('session.php');
    if(!isset($_SESSION['login_user'])){
    header("location: index.php");
    }
    ?>

<!doctype html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<meta charset="utf-8">
<title>Topics</title>
<link rel="stylesheet" type="text/css" href="./style.css">
		 <div class="topnav">
		   <a  class="active" href="./topics.php">Topics</a>
			<a href="./search.php">Search</a>
  			<a href="./choice.php">Choice</a>
 			 <a href="./supervisor.php">Supervisor</a>
			<a id="logout" href="logout.php">Log out</a>
		
</div>
</head>

<body style="background-color:#8DB6DF;">
	<div class="searchtitle"><h1 style="font-size:8vw;">Areas of Research</h1></div>
	<div class="subhed"><h2 style="font-size:3vw;">Click on a topic to view projects!</h2></div>
  <div class="row">
  <div class="column">
	 <a style="display:block; text-decoration: none;" href="./assets/Machine_Learning.pdf" target="_blank">
		 <div class="card"><p></p>MACHINE LEARNING</div></a>
  </div>
  <div class="column">
     <a style="display:block; text-decoration: none;" href="./assets/Networks.pdf" target="_blank">
    <div class="card"><p></p>NETWORKING</div>
  </div>
  <div class="column">
    <a style="display:block; text-decoration: none;" href="./assets/HCI.pdf" target="_blank">
    <div class="card"><p></p>HCI</div></a>
  </div>
  <div class="column">
    <a style="display:block; text-decoration: none;" href="./assets/Robotics.pdf" target="_blank">
    <div class="card"><p></p>ROBOTICS</div></a>
  </div>
	    <div class="column"><a style="display:block; text-decoration: none;" href="./assets/Data_Science.pdf" target="_blank">
    <div class="card"><p></p>DATA SCIENCE/MINING</div></a>
  </div>
	   <div class="column">
     <a style="display:block; text-decoration: none;" href="./assets/Cloud_Computing.pdf" target="_blank">
    <div class="card"><p></p>CLOUD COMPUTING</div></a>
  </div>
	    <div class="column">
                <a style="display:block; text-decoration: none;" href="./assets/Game_Development.pdf" target="_blank">
    <div class="card"><p></p>GAMES DEVELOPMENT</div></a>
  </div>
	    <div class="column">
        <a style="display:block; text-decoration: none;" href="./assets/AI.pdf" target="_blank">
    <div class="card"><p></p>ARTIFICIAL INTELLIGENCE</div></a>
  </div>
	    <div class="column">
        <a style="display:block; text-decoration: none;" href="./assets/Computer_Vision.pdf" target="_blank">
    <div class="card"><p></p>COMPUTER VISION</div></a>
  </div>
	    <div class="column">
        <a style="display:block; text-decoration: none;" href="./assets/Image_Processing.pdf" target="_blank">
    <div class="card"><p></p>IMAGE PROCESSING</div></a>
  </div>
	    <div class="column">
        <a style="display:block; text-decoration: none;" href="./assets/Cross_Platform.pdf" target="_blank">
    <div class="card"><p></p>CROSS PLATFORM DEVELOPMENT</div></a>
  </div>
	    <div class="column">
        <a style="display:block; text-decoration: none;" href="./assets/Web_Development.pdf" target="_blank">
    <div class="card"><p></p>WEB DEVELOPMENT</div></a>
  </div>
   <div class="column">
    <a style="display:block; text-decoration: none;" href="./assets/VR.pdf" target="_blank">
    <div class="card"><p></p>VIRTUAL AND AUGMENTED REALITY</div>
  </div>
   <div class="column">
    <a style="display:block; text-decoration: none;" href="./assets/Other.pdf" target="_blank">
    <div class="card"><p></p>OTHER</div></a>
  </div>
</div> 
</body>
</html>
