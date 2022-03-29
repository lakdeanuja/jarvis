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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="css/style.css" type="text/css" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>N. Agenecy</title>
    
    <meta name="description" content="N.Agency - Responisve Landing Page for Agency">
    <meta name="keywords" content="">
    <meta name="author" content="tabthemes">
    

    
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- CSS Files For Plugin -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/YTPlayer.css" rel="stylesheet" />
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <header>
       <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
       <a href="#home"><img class="logo" src="images\mainnselogo.jpg" width="250" height="130" alt="logo" data-rjs="2"></a>
       </nav>
    </header>
<div class="logo-container">
    <div class="logo-wrap local-scroll">
        
    </div>
</div>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Jarvis.</h1>
    <p>


        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>

    <a href="hrbp.php" class="btn btn-warning">Proceed to Attrition DashBoard</a>
    <a href="bgv/dashboard.php" class="btn btn-warning">Proceed to BGV DashBoard</a>


</body>
</html>
