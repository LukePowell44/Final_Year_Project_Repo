  <?php
    
    $conn = mysqli_connect("localhost", "root", "", "project");
    session_start();
    
    $user_check = $_SESSION['login_user'];
  
    $query = "SELECT email from student_user where email = '$user_check'";
    $ses_sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session = $row['email'];
    ?>