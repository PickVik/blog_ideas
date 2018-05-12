
<?php

$msg ="";
if (isset ($_POST['submit'])){
    
    
    $conn = new mysqli('localhost', 'Library', '12345', 'blog');
    
    $email = $conn->real_escape_string($_POST['Email']);
    $first_name = $conn->real_escape_string($_POST['Firstname']);
    $last_name = $conn->real_escape_string($_POST['Lastname']);
    $password = $conn->real_escape_string($_POST['Password']);
    $cpassword = $conn->real_escape_string($_POST['cpassword']);
    
    foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$msg = "<label>All Fields are required</label>";
        break;
        }
    
    if ($password !== $cpassword){
        $msg = "<label>Password does not match</label>";
        
        
    } else {
        
       $hash = password_hash($password, PASSWORD_DEFAULT);
       $conn->query("INSERT INTO users (email, first_name, last_name, password) VALUES ('$email', '$first_name', '$last_name', '$hash')");
    
        //header( 'Location: register_success.php');
    
         
    }
    }
    
    
  
    
}
?>








<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="register_style.css">
        <title>Sexy Salad - Registration</title>
    </head>
    <body>
       
        
         <a href="https://www.facebook.com"><img src="fb_logo.jpg" height="40" width="80" alt="Facebook"></a>

        <header>
                <div class="jumbotron jumbotron-fluid">
        <h1 id="register">Please Register</h1>
                </div>
            
        </header>
        
                <div class="container" align="center">
        <form id="form" action="" method="post"> 
        
                <div class="form-group">
                        <input type="email"  name="Email" placeholder ="Enter Email"/>
                </div>
                        
                <div class="form-group">
                        <input type="password" name="Password" placeholder ="Enter Password"/>
                 </div>
            
                <div class="form-group">
                        <input type="password"  name="cpassword" placeholder ="Confirm Password"/>
                </div>
                        
                <div class="form-group">
                    <input type="text" name="Firstname" placeholder ="First Name"/>
                </div>
                        
                <div class="form-group">
                    <input type="text" name="Lastname" placeholder ="Last Name"/>
                </div>
        
        <input class="btn btn-success" type="submit" name="submit" id="button" value="Let me in"/> 
        <br>
        <br>
        <?php if ($msg != "") {echo $msg . "<br><br>";} ?>
      
        
        
   
        <label>Already Registered? Click <a href='login.php'>here</a> to log in</label>
        </form>
     </div>
        
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
