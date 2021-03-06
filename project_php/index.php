 <?php
 /****************************************************************************************
*    Title: Boostrap Dual Login Form
*    Author: kshiti06
*    Date: n.d.
*    Code version: Bootstrap 4.1.1
*    Availability: https://bootsnipp.com/snippets/z8aQr#comments
*
***************************************************************************************/

    include('process1.php');
    if(isset($_SESSION['login_user'])){
    header("location: topics.php"); 
    }
        include('process2.php'); 
    if(isset($_SESSION['login_user2'])){
    header("location: staffportal.php"); 
    }
    ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="./style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>




<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Student Portal</h3>
                    <form method="post" action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Student Email *" name="username"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Student Password *" name="password"/>
                        </div>
                        <div class="form-group">
                           <input type="submit" class="btnSubmit" value="Login" name="btn-login-student"/>
                            <span><?php echo $error; ?></span>
                        </div>
                        <div class="form-group">
                            <a class="ForgetPwd" href="https://passwordreset.microsoftonline.com/?whr=lincoln.ac.uk">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Staff Portal</h3>
                    <form method="POST" action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Staff Email *" value="" name="username"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Staff Password *" value="" name="password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" id="btnSubmit" value="Login" name="btn-login-staff"/>
                        </div>
                        <div class="form-group">

                            <a href="https://passwordreset.microsoftonline.com/?whr=lincoln.ac.uk" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
</div>
<body style="background-color:#8DB6DF">

</body>
</html>