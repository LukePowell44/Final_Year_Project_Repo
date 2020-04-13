<?php
    $error = ''; 
    if (isset($_POST['btn-login-staff'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
    }
    else{
    $username2 = $_POST['username'];
    $password2 = $_POST['password'];
    $conn2 = mysqli_connect("localhost", "root", "", "project");
    $query2 = "SELECT email, password from staff_user where email=? AND password=? LIMIT 1";
    $stmt2 = $conn2->prepare($query2);
    $stmt2->bind_param("ss", $username2, $password2);
    $stmt2->execute();
    $stmt2->bind_result($username2, $password2);
    $stmt2->store_result();
    if($stmt2->fetch()) 
    $_SESSION['login_user2'] = $username2; 
    header("location: staffportal.php"); 
    }
    mysqli_close(mysqli_connect("localhost", "root", "", "project"));
    }
    ?>