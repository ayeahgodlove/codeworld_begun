<?php

session_start();
  if(!isset($_SESSION['username']))
    {
        include 'signin.php';
        die();
      
    }
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];

?>
<!DOCTYPE html>
<!--Created on : Nov 19, 2018, 10:08:15 AM Author     : Ayeah-->
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="description" content="Love Royal Assemby Ministry">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Bro W.N Romanus">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css"  href="resources/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css"  href="resources/css/bootstrap.css" />
        
        <link rel="stylesheet" type="text/css" href="resources/css/styles.css" />
         
        <link rel="stylesheet" type="text/css" href="resources/css/w3.css" />
        <script src="resources/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="resources/js/bootstrap.js" type="text/javascript"></script>
        <title></title>
        <style>
        .longcont{width:100%; margin-bottom:50px; margin: auto; 
                float: right; list-style: none; 
            }
            .longcont ul li{display: inline-block; }
            .longcont ul li a{text-decoration: none; height: 48px; width: 160px}
            .longcont ul li.active a{
                border: 1px solid white;

            }
            .longcont ul li a:hover {
                border: 1px solid orange;
            }
            .contents{
                border-radius: 5px; border: 1px solid #ddd; padding: 20px; min-height: 400px; 
            }
          
          
            section{ width: 75%; margin-left: 10%; }
            section form{width: 100%;  display: block; margin: 50px; 
            }
       
        </style>
    </head>
    <body style="background-color:lightgoldenrodyellow;">
        <div class="container">
            <header>
                <div class="logo1">
                    <img style="width:160px; height: 90px; float: left; padding-top: 0px;" src="resources/pics/logo.jpg"  alt="logo" />
                    <div style="margin-left:80%; " >  
                        <!-- logged in user information -->
                        <p style="color:cornsilk;">Welcome<br> <strong><?php echo $email; echo '<br />'; echo $username;?></strong></p>
                        <p> <a class="btn-danger btn"  href="signin.php" style="color: cornsilk;">LOGOUT</a> </p>
                     </div>
                </div>
                
            </header>

            <div class="contents " style="background-image: url('resources/pics/90.jpg');" >
                
                <div class="longcont">
                    
                    <ul>
                        <li><a class="btn-danger btn"  href="?page=home">Home</a></li>
                        <li><a class="btn-danger btn" href="?page=blogpost">POSTS</a></li>
                        <li><a class="btn-danger btn" href="?page=biblestudy">BIBLE STUDY</a></li>
                        <li><a class="btn-danger btn" href="?page=setPoster">ADD POSTER</a></li>
                        <li><a class="btn-danger btn" href="?page=deleteBlog">REMOVE OLDPOST </a></li>
                        <li><a class="btn-danger btn " href="?page=deletePoster">REMOVE POSTER</a></li>
                        <li><a class="btn-danger btn " href="admin/index0.php">NEWS LETTERS</a></li>
                    </ul>
                   
                 </div>
                <div class="clear"></div>
                 
                    <section id="page" >
                    <?php
                    //$_SESSION['message']; 
                     if(@$_GET['page']){
                        $url = "admin/".$_GET['page'].".php";
                        if(is_file($url)){
                        include $url;
                    }
                    else{
                        echo 'request file is not found !';
                        }
                     }
                        else{
                         include 'admin/home.php';
                        }
                        ?>
                    </section>
        </div>
         <div class="clearfix"></div>
        </div>
    </body>
</html>
   