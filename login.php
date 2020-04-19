<?php
session_start();
?>

<html>
<head>
    <title>
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
          
       </head>
    <body>
        
        <div class="login-box">
            <h2>Login Here</h2>
            
              <form action = "validation.php" method = "post">
                 <p>UserName</p>
                  <input type="text" name="username" placeholder="Enter Username">
                  <p>Password</p>
                  <input type="password" name="password" placeholder="Enter Password">
                  <input type="submit" name="submit" value="Login">
                  <br>
                  
                   <?php if(isset($_SESSION['errors'])): ?>
    <div class="form-errors">
        <?php foreach($_SESSION['errors'] as $error): ?>
            <p><?php echo $error ?></p><br> Or <a href="signup.php">Click Here To Sign Up</a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
                 <br> <a href="#">Forget Password</a>
                 
                 </form>
            
        </div>
       
        
        
    </body>
    
</html>
<?php
    unset($_SESSION["errors"]);
?>
