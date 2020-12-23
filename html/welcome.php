<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="WELCOME.css">
</head>


<!--------------------------------------------------MAIN--------------------------------------------------------------->

        <div class="items-group">
            <div class="item agileits-w3layouts">
                <div class="block text main-agileits"> 
                    <span class="circleLight"></span> 
<!--------------------------------------------------LOGIN--------------------------------------------------------------->

<body>

    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.<br><br> Welcome !</h1>
    </div>


    <div class="reset">
        <a href="reset-password.php" class="reset-password">Reset Your Password</a>
    </div>


    <div class="signout">
        <a href="logout.php" class="sign-out">Sign Out of Your Account</a>
    </div>
<!--------------------------------------------------LOGIN--------------------------------------------------------------->
      
                </div>
            </div>
        </div>

<!--------------------------------------------------MAIN--------------------------------------------------------------->
</body>
</html>