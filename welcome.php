@@ -77,29 +77,58 @@ if($_SERVER["REQUEST_METHOD"] == "POST"){
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
        body {
  background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  font-family: "Open Sans", sans-serif;
  color: #333333;
}
#rcorners2 {
  border-radius: 25px;
  border: 2px solid #ffff;
  padding: 20px; 
  width: 200px;
  height: 570px;  
}


        .wrapper{ position:center; width: 360px; padding: 20px; }
        
}
    </style>
</head>
<body>
<br>
    </br>

    <div style="background: #ffff; margin: auto; width: 400px;"
    <div id="rcorners2">
    <div style="margin: auto; width: 350px;class="wrapper">
    <div style="margin: auto; width: 250px;class="wrapper">
   <img src="images\mainnselogo.jpg" alt="nseit" width="250" height="130"></div>
    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
    <h2 align="center" style="color:#151B8D"><b>Reset Password</b></h2>
        <p align="center"><b>Please fill out this form to reset your password.</b></p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>New Password</label>
                <label><b>New Password</b></label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <label><b>Confirm Password</b></label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div><br>
            <div class="form-group" align="center">
                <input type="&nbsp;submit&nbsp;" class="btn btn-danger" value="Submit">
                <a class="btn btn-link ml-2" href="welcome.php">Cancel</a>
                &nbsp;&nbsp;
                
            </div>
            &nbsp;&nbsp;
        </form>
    </div>    
</body>