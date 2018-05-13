<?php

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="main_page_style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Admin page for blogger</title>
    </head>
    <body>
        
           <header>
                <div class="jumbotron jumbotron-fluid">
                    <h1 id="sexy_salads">Sexy Salads</h1>
                </div>
           </header>
        
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active">Home</a>
            <a href="#recipes">Recipes</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a> 
            <a href="#login">Login</a>
            <a href="#register">Register</a>
            <a href="#my_fav">My Favourites</a>
            <a href="#about">Logout</a>
            <a href="https://www.facebook.com"><img src="facebook.jpg" height="40" width="60" alt="Facebook"></a>
            <a href="https://www.twitter.com"><img src="twitter.jpg" height="40" width="60" alt="Twitter"></a>
            <a href="https://www.instagram.com"><img src="instagram.jpg" height="40" width="60" alt="Instagram"></a>
            <a href="https://www.pinterest.com"><img src="pinterest.jpg" height="40" width="60" alt="Pinterest"></a>
            <a href="https://www.whatsapp.com"><img src="whatsapp.jpg" height="40" width="60" alt="WhatsApp"></a>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
      
        <header>
                <div class="jumbotron jumbotron-fluid">
                    <h1 id="register">Admin Page</h1>
                </div>
        </header>
        
        
        <div class="container">
            <div class ="row justify-content-center">
                <div class ="col-6">
                    <form>
                        <div class="form-group">
                            <label for="article_text">Article Text</label>
                            <textarea class="form-control" id="article_text" rows="25"></textarea> 
                        </div>                 
                        <input input class="btn btn-primary" type="submit" name="submit" value="Submit" />   
                        
                        <div class="form-group">
                          <div class=text-white>
                             <h1> Upload your files here - jpegs only, file size limit is </h1>
                            </div>
                          <form action=" "
                                method="post"
                                enctype="multipart/form-data">

                                <input type="hidden"
                                   name="MAX_FILE_SIZE"
                                   value="10000000"/>

                                <input type="file" name="myfile"/>
                                <input type="submit" name="send"/>  
                          </form>             
                    </form>
                </div>
            </div>
        </div> 
            
<div class="text-danger h2">
                       
    <?php
        const InputKey= 'myfile';
        const AllowedTypes = ['image/jpeg', 'image/jpg'];

        if (empty($_FILES[InputKey])){
                die("File Missing!");
            }                                      

            if($_FILES[InputKey]['error']>0){
                die ("Handle the error!");
            }                  
            if (!in_array ($_FILES[InputKey]['type'], AllowedTypes)){
                die ("Handle File Type Not Allowed");
            }
            $tmpFile = $_FILES[InputKey]['tmp_name'];                   
            $dstFile = 'Uploads/'.$_FILES[InputKey]['name'];                   

            if (!move_uploaded_file ($tmpFile, $dstFile)) {
                die ("Handle Error");                    
            }                                             
            if (file_exists($dstFile)){
                echo "Successful upload";
            }                   
     ?>                                                  
</div>                                    
                        
               
    
    </body>
            
</html>   
            

             
                
        
               

