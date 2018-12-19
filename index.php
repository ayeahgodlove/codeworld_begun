<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Love Royal Assemby Ministry">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Bro W.N Romanus">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css"  href="resources/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"  href="resources/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/w3.css" />
    
    <!-- Javascript -->
    <script src="resources/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="resources/js/bootstrap.js" type="text/javascript"></script>
    <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive"; 
        } 
        else {
            x.className = "topnav";
        }
    }   
        </script>
</head>
<body style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('resources/pics/cr.jpg');">
    <div class="container">
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- Header content -->
        <header>
            <div class="logo">
                <img src="resources/pics/logo.jpg" width="170" height="100" style="margin-left: 0px; padding-top:0px;" alt="logo" />
            </div>
            <div class="topnav" id="myTopnav" style="margin-left:40%; padding-top: 30px; ">
                <a class="btn active" href="index.php" >Home</a>
                <a class="btn " href="blog.php">Blog</a>
                <a class="btn " href="about.php">About</a>
                <a class="btn " href="contact.php">Contact</a>
                <a class="btn " href="gallery.php">Gallery</a>
                <a class="btn " href="support.php">Support</a>
                <a class="btn " href="visit.php">Visit</a>
                <a class="btn " href="signin.php">Login</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </header>
        <div class="clearfix"></div>
        <!-- Section Here -->
        <section>
            <!-- Image slideshow section -->
            <div class="w3-content"  style="max-width:90%; position:relative; border-radius: 15px; border: 7px solid #333; background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));">
                <div class="w3-display-container mySlides">
                    <img class="w3-animate-fading" src="resources/pics/a1.jpg" style="width:100%; height: 400px">
                    <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                     LOVE LOYAL ASSEMBLY WELCOMES YOU
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img class=" w3-animate-fading" src="resources/pics/a4.jpg" style="width:100%; height: 400px">
                    <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
                          LOVE LOYAL ASSEMBLY WELCOMES YOU
                    </div>
                </div>

                <div class="w3-display-container mySlides">
                    <img class="w3-animate-fading" src="resources/pics/g.jpg" style="width:100%; height: 400px">
                    <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
                          LOVE LOYAL ASSEMBLY WELCOMES YOU 
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img class=" w3-animate-fading" src="resources/pics/b.jpg" style="width:100%; height: 400px">
                    <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
                           LOVE LOYAL ASSEMBLY WELCOMES YOU
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img class=" w3-animate-fading" src="resources/pics/a.jpg" style="width:100%; height: 400px">
                    <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
                          LOVE LOYAL ASSEMBLY WELCOMES YOU 
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img class=" w3-animate-fading" src="resources/pics/a0.jpg" style="width:100%; height: 400px">
                    <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
                          LOVE LOYAL ASSEMBLY WELCOMES YOU 
                    </div>
                </div>
                <div class="w3-display-container mySlides">
                    <img class=" w3-animate-fading" src="resources/pics/00.jpg" style="width:100%; height: 400px">
                    <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
                          LOVE LOYAL ASSEMBLY WELCOMES YOU 
                    </div>
                </div>
                <div class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
                    <span class="w3-badge demo w3-border w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-hover-white" onclick="currentDiv(3)"></span>
                    <span class="w3-badge demo w3-border w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-hover-white" onclick="currentDiv(3)"></span>
                </div>
                <a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:52%;left:0" onclick="plusDivs(-1)">❮</a>
                <a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:52%;right:0" onclick="plusDivs(1)">❯</a>
                <script>  
                //Automatic Image slider
                var slideIndex = 1;
                showDivs(slideIndex);
                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }
                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++){
                     x[i].style.display = "none"; }
                    x[slideIndex-1].style.display = "block";  
                }
                var slideIndex = 0;
                    showSlides();
                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none"; 
                    }
                    slideIndex++;
                    if (slideIndex> slides.length) {slideIndex = 1} 
                    slides[slideIndex-1].style.display = "block"; 
                    setTimeout(showSlides, 3000); // Change image every 2 seconds
                }
                </script>
            </div>
            <!-- aside -->
             <aside style="text-align: center; margin-top: 50px; "> 
                <h2 style="color: cornsilk; font-family: Verdana; ">Let Your light so shine before men</h2>
                <em style="color: white;">Learn about our mission, our beliefs, and the hope we have in Jesus Christ our Saviour</em><br><br>
                <a href="visit.php" class="btn-primary btn-lg" style="text-decoration: none;">Visit Our Church</a>
            </aside>
            
            <!-- Main body -->
            <div class="body">
                <h4 style="text-align:center; padding-top: 50px; color: cornsilk;">Listen to God's voice, And listen to his prophets</h4>
                <div class="responsive">
                    <div class="gallery" style="overflow-x:auto; background-color:#000; color:cornsilk;">
                        <div class="desc">QUOTE FOR THE DAY</div>
                        <div style="padding-left:25px;"> 
                          <?php  include 'admin/displayBible.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="responsive" >
                    <div class="gallery" style="overflow-x:auto; background-color:#000; color:cornsilk;">
                        <div class="desc">PRAYER REQUEST</div>
                        <?php 
                            $result1 = "";
                            if(isset($_POST['pray']))
                            {
                                require_once 'phpmailer/PHPMailerAutoload.php';
                                $mail = new PHPMailer();
                                $mail->isSMTP();
                                $mail->SMTPAuth = 'true';
                                $mail->SMTPSecure = 'ssl';
                                $mail->Host = 'smtp.gmail.com';
                                $mail->Port = '465';
                                $mail->isHTML();
                                $mail->Username = 'awontiromanus10@gmail.com';
                                $mail->Password = 'progress4ever';
                                $mail->setFrom('files.000webhost.com');
                                $mail->addReplyTo($_POST['email'],$_POST['username']);
                                $mail->Subject = 'Prayer Request:';
                                $mail->Body = '<p>Name:'.$_POST['username'].'<br>Email:'.$_POST['email'].'<br>Location:'.$_POST['location']
                                    .'<br>Question:'.$_POST['request'].'</p>';  
                                $mail->addAddress('awontiromanus10@gmail.com');
                                
                                if(!$mail->send())
                                 {
                                  $result1 = "Error 101. <br> Please try again!";

                                }else{
                                    $result1 = "Thanks ".$_POST['username']."<br> Thankyou for believing God's word!";
                                }
                            }
                        ?>
                        <form method="post" action="" enctype="multipart/form-data" style="padding-left:15px;" >
                            <div style="color:cornsilk; text-align:center; color:red;"><?= $result1; ?></div>
                            <input type="text" placeholder="Full Names" name="username" required /> <br>
                            <input type="email"  placeholder="EMAIL" name="email" required /><br>
                            <input type="text" placeholder="LOCATION" name="location" required /><br>
                            <textarea type="text" style="height: 70px;" name="request" placeholder="Message" required ></textarea><br>
                            <input class="btn-primary btn" type="submit" name="pray" value="Send">
                        </form>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery" style="overflow-x:auto; background-color:#000; color:cornsilk;">
                        <div class="desc">ASK YOUR QUESTIONS</div>
                        <?php 
                            $result = "";
                            if(isset($_POST['ask']))
                            {
                                require_once 'phpmailer/PHPMailerAutoload.php';
                                $mail = new PHPMailer();
                                $mail->isSMTP();
                                $mail->SMTPAuth = 'true';
                                $mail->SMTPSecure = 'ssl';
                                $mail->Host = 'smtp.gmail.com';
                                $mail->Port = '465';
                                $mail->isHTML();
                                $mail->Username = 'awontiromanus10@gmail.com';
                                $mail->Password = 'progress4ever';
                                $mail->setFrom('files.000webhost.com');
                                $mail->addReplyTo($_POST['email'],$_POST['username']);
                                $mail->Subject = 'Question Form:';
                                $mail->Body = '<p>Name:'.$_POST['username'].'<br>Email:'.$_POST['email'].'<br>Location:'.$_POST['location']
                                    .'<br>Question:'.$_POST['question'].'</p>';  
                                $mail->addAddress('awontiromanus10@gmail.com');
                                
                                if(!$mail->send())
                                 {
                                  $result = "Error 100. <br> Please try again!";

                                }else{
                                    $result = "Thanks ".$_POST['username']."<br> We'll get back to you soon!";
                                }
                            }
                        ?>
                        <form method="post" action="" enctype="multipart/form-data" style="padding-left:15px;" >
                            <div style="color:cornsilk; text-align:center; color:red;"><?= $result; ?></div>
                            <input type="text" placeholder="Full Names" name="username" required /> <br>
                            <input type="email" placeholder="Email" name="email" required /> <br>
                            <input type="text" placeholder="location" name="location" required /><br>
                            <textarea type="text" style="height: 70px;" name="question" placeholder="YOUR QUESTION" ></textarea><br>
                            <input class="btn-primary btn" type="submit" name="ask" value="ASK YOUR QUESTION">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Church Activities-->
        <div class="responsive" >
            <div class="gallery" style="overflow-x:auto; background-color:#000; border-radius:5px; border:1px solid #333; min-height: 300px; color:cornsilk;">
            <div class="desc">
                <h4 style="text-align:center;">COME ONE COME ALL</h4>
                <hr>
                <img src="resources/pics/img1.jpg"  width="787" alt="post" />
            </div>
            </div>
        </div>
        <div class="clearfix"></div>
        
        <!-- Video gallery -->
        <div class="gallery" style="overflow-x:auto; background-color:#000; border-radius:5px; border:1px solid #333; min-height: 150px; color:cornsilk; margin-top:50px;">
            <h4 style="text-align:center;">VIDEO GALLERY  <br> Click link to watch our videos
            <a class="btn btn-danger" href="https://www.youtube.com/channel/UCodd5aI8zIrFylFD7E0sK5A">Watch</a></h4>
            <hr>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/1DvNWw06M4o" frameborder="0" ></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/1ZCURYG62qo" frameborder="0"  allowfullscreen></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/gt9aB2FSkQM" frameborder="0"  allowfullscreen></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/1l5GbfsZjfU" frameborder="0"  allowfullscreen></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/ArQSVetFr5s" frameborder="0"  allowfullscreen></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/74oN0AL_q-k" frameborder="0"  allowfullscreen></iframe>       
        </div>
        <div class="clearfix"></div>
        
        <!--Image gallery -->
        <div class="comments" style=" overflow-x:auto; margin-top: 55px; width:100%; border-radius: 10px; border: 1px solid #000; min-height: 200px; background-color: #000;">
                <h4 style="text-align:center; color: cornsilk;">IMAGE GALLERY<a class="btn btn-danger" href="gallery.php">See More</a></h4>
                
                <hr>
                <div style="padding-left:25px; color: #000; font-size: 15px;">
                   <?php include 'admin/displayPoster.php';  ?>
                </div>
         </div>
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer>
           <div class="responsive" style=" background-color: #000; margin-left:5%;">
               <div class="gallery"  style="border-radius:3px; border: 1px solid #000;">
                <div class="desc">
                   <h5>POSTAL ADDRESS</h5>
                    <p>LOVE ROYAL ASSEMBLY</p>
                    <p>Garage Weno, Bonaberi, Douala Cameroun</p>
                    <h5>PRAYERS &AMP; COUNSELLING</h5>
                    <p> +(237) 698-915-972 </p><p> +(237) 674-390-725</p>
                </div>
               </div>
            </div>
               <div class="links" style=" background-color: #000;">
                    <h4 style="text-align: center;">Connect with us</h4>
                    <ul>
                        <li><a href="https://web.facebook.com/WNRomanusMinistries/"><img src="resources/pics/fk.png" alt="facebook"/></a></li>
                        <li><a href="https://twitter.com/WNRomanus?lang=en"><img src="resources/pics/twt.png" alt="tweeter" /></a></li>
                        <li><a href="https://www.youtube.com/channel/UCodd5aI8zIrFylFD7E0sK5A"><img src="resources/pics/yt.png"  alt="youtube" /></a></li>
                        <li><a href="https://www.instagram.com/explore/locations/1365726630205380/wn-romanus-ministries/?hl=en"><img src="resources/pics/i.png" width="30" height="35"  alt="Instagram" /></a></li>
                    </ul>
                </div>
            <div class="clearfix"></div>
            <div class="responsive" style=" background-color: #000; margin-left:5%;">
               <div class="gallery"  style="border-radius:3px; border: 1px solid #000;">
                <div class="desc">
                    <?php include 'admin/subcribe.php';?>
                    <form method="post" action="#" enctype="multipart/form-data">
                        <h5>SIGN UP FOR OUR NEWSLETTERS</h5>
                        <div style="color:red; font-size:13px;"><?= $results; ?></div>
                        <input type="text" name="customer_name" placeholder="Enter name" style="color:#000" />
                        <input class="input-lg" style="color:#000" type="email" name="customer_email" placeholder="enter your email"/><input class="btn-danger btn" type="submit" name="subscribe" value="Subscribe" /> <br>
                        <p style="color:cornsilk"></p>
                    </form>
                </div>
               </div>
            </div>
           <div class="responsive" style=" background-color: #000; float:right;  margin-right: 5%;">
               <div class="gallery" style="border-radius:3px; border: 1px solid #000;">
                <div class="desc">
                   <strong> Love Royal Assembly Cameroon</strong> &copy; Copyright <?php echo date(" Y", time()); ?>
                    <p>Designed by A.G.A Tech <br>Contact:+237-673-687-549 <br> Email:ayeahgodlove5@gmail.com</p>
                </div>
               </div>
            </div> 
            <div class="clearfix"></div>
        </footer>
    </div>
</body>
</html>