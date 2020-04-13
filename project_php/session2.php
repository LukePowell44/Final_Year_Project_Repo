  <?php
    
    $conn2 = mysqli_connect("localhost", "root", "", "project");
    session_start();
    

 


    $user_check2 = $_SESSION['login_user2'];
   
    $query2 = "SELECT email from staff_user where email = '$user_check2'";
    $ses_sql2 = mysqli_query($conn2, $query2);
    $row2 = mysqli_fetch_assoc($ses_sql2);
    $login_session2 = $row2['email'];
    ?>