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
    
    <title>nseit</title>
    
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
<!-- <a href="#home"><img class="logo" src="image\NseLogo.jpg" width="250" height="130" alt="logo" data-rjs="2"></a> -->
    <header>
       <!-- 
       <div class="container-fluid"> -->
   
 <nav class="navbar navbar-light" style="background-color: #0056b3;">
  <form class="container-fluid justify-content-start">
    <a href="#home"><img class="logo" src="mages\mainnselogo.jpg" width="250" height="130" alt="logo" data-rjs="2"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!-- <ul class="nav nav-pills nav-fill">
    <li class="nav-item">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link active" href="login.php">LOGIN</a>  
    </li>
    </ul> -->
</form>
</nav>
    </header>
</div>

    <h1 class="my-2">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Jarvis.</h1>
    <table class="table">
    <tbody>
    <tr>
      <td> <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


</body>
</html>
