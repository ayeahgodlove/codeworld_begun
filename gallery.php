
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Love Royal Assemby Ministry">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Bro W.N Romanus">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css"  href="resources/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css"  href="resources/css/bootstrap.css" />
       <link rel="stylesheet" type="text/css" href="resources/css/w3.css" />
        
        <link rel="stylesheet" type="text/css" href="resources/css/styles.css" />
       
  
        <script src="resources/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="resources/js/bootstrap.js" type="text/javascript"></script>
        <title>gallery</title>
        
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

          <div style=" background:url('resources/pics/c.jpg'); margin-bottom: 0px; margin-top: 0px; background-color: cornsilk; border-radius: 5px; border:1px solid #000; "> <h1  style="text-align: center; color: #000; height: 100px ">PICTURE GALLERY </h1></div> 
            <div style="background-color:#000; border-radius: 5px; border: 1px solid #000; color: cornsilk;">
           <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/one.jpg">
                <img src="resources/pics/one.jpg" alt="one" width="600" height="400">
              </a>
              <div class="desc">Love Royal Assembly visits Ophanage</div>
            </div>
          </div>

        
          <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/3.jpg">
                  <img src="resources/pics/3.jpg" alt="donation" width="600" height="400">
              </a>
              <div class="desc">Charity Work by Love Royal Assembly</div>
            </div>
          </div>

          <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/4.jpg">
                    <img src="resources/pics/4.jpg" alt="love" width="600" height="400">
              </a>
              <div class="desc">Bro Romanus (The Sherperd of Love Royal Assembly) Showing an act of Love </div>
            </div>
          </div>

          <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/2.jpg">
                  <img src="resources/pics/2.jpg" alt=love width="600" height="400">
              </a>
              <div class="desc">Bro Romanus MInistering to children of the Almighty</div>
            </div>
          </div>
          <div class="clearfix"></div>
            <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/i.jpg">
                  <img src="resources/pics/i.jpg" alt="stand" width="600" height="400">
              </a>
              <div class="desc">Bro Romanus</div>
            </div>
          </div>
             <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/10.jpg">
                  <img src="resources/pics/10.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">The Victory is worn</div>
            </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/11.jpg">
                  <img src="resources/pics/11.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Victory Day</div>
            </div>
          </div>
             
           <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/12.jpg">
                  <img src="resources/pics/12.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Victory Day</div>
            </div>
          </div>
          <div class="clearfix"></div>
           <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/13.jpg">
                  <img src="resources/pics/13.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Victory Day</div>
            </div>
          </div>
          
          <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/14.jpg">
                  <img src="resources/pics/14.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Victory Day</div>
            </div>
          </div>
          
           <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/15.jpg">
                  <img src="resources/pics/15.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Under the Anointing of the Holy Spirit</div>
            </div>
          </div>
             
           <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/0.jpg">
                  <img src="resources/pics/0.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Good deeds</div>
            </div>
          </div>
           <div class="clearfix"></div>
           <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/a.jpg">
                  <img src="resources/pics/a.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Having fun with the kids</div>
            </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/a1.jpg">
                  <img src="resources/pics/a1.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Good deeds</div>
            </div>
          </div>
           <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/r.jpg">
                  <img src="resources/pics/r.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Ready For Another Encounter</div>
            </div>
          </div>
           <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0004.jpg">
                    <img src="resources/pics/IMG-20181127-WA0004.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Good deeds</div>
            </div>
          </div>
           <div class="clearfix"></div>
           <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0006.jpg">
                  <img src="resources/pics/IMG-20181127-WA0006.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Good deeds</div>
              <div class="desc">Every man/woman created by the Lord deserves a chance</div>
            </div>
          </div>
           <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0007.jpg">
                    <img src="resources/pics/IMG-20181127-WA0007.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Bro Romanus</div>
            </div>
          </div>
           <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0008.jpg">
                    <img src="resources/pics/IMG-20181127-WA0008.jpg" alt="celebration" width="600" height="400">
              </a>
              <div class="desc">Bro Romanus</div>
            </div>
          </div>
         <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0011.jpg">
                    <img src="resources/pics/IMG-20181127-WA0011.jpg" alt="celebration" width="600" height="400">
              </a>
                <div class="desc">Good deeds</div>
            </div>
          </div>
           <div class="clearfix"></div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0013.jpg">
                    <img src="resources/pics/IMG-20181127-WA0013.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">The glory of the Almighty</div>
            </div>
          </div>

          <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0015.jpg">
                    <img src="resources/pics/IMG-20181127-WA0015.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">Bro Romanus Praying for the sick and Oppressed</div>
            </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0016.jpg">
                    <img src="resources/pics/IMG-20181127-WA0016.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">Bring them all to Jesus Christ</div>
            </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0017.jpg">
                    <img src="resources/pics/IMG-20181127-WA0017.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">God loves little children</div>
            </div>
          </div>
           <div class="clearfix"></div>
            <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0018.jpg">
                    <img src="resources/pics/IMG-20181127-WA0018.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">Bro Romanus Having Fellowship with sons of God</div>
            </div>
          </div>
            <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0024.jpg">
                    <img src="resources/pics/IMG-20181127-WA0024.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">Progress forever</div>
            </div>
          </div>
           <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0027.jpg">
                    <img src="resources/pics/IMG-20181127-WA0027.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">The Glory of God</div>
            </div>
          </div>
         <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0022.jpg">
                    <img src="resources/pics/IMG-20181127-WA0022.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">Please Subscribe to my facebook page</div>
            </div>
          </div>
           <div class="clearfix"></div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="resources/pics/IMG-20181127-WA0028.jpg">
                    <img src="resources/pics/IMG-20181127-WA0028.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">Bro Romanus</div>
            </div>
          </div>
          <div class="responsive">
           <div class="gallery">
               <a target="_blank" href="resources/pics/IMG-20181127-WA0025.jpg">
                    <img src="resources/pics/IMG-20181127-WA0025.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">Bro Romanus</div>
            </div>
          </div>
          <div class="responsive">
           <div class="gallery">
               <a target="_blank" href="resources/pics/IMG-20181127-WA0026.jpg">
                    <img src="resources/pics/IMG-20181127-WA0026.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">Bro Romanus </div>
            </div>
          </div>
           <div class="responsive">
           <div class="gallery">
               <a target="_blank" href="resources/pics/IMG-20181127-WA0030.jpg">
                   <img src="resources/pics/IMG-20181127-WA0030.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">Bro Romanus</div>
            </div>
          </div>
           <div class="clearfix"></div>
          <div class="responsive">
           <div class="gallery">
               <a target="_blank" href="resources/pics/IMG-20181128-WA0028.jpg">
                   <img src="resources/pics/IMG-20181128-WA0028.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">Bro Romanus</div>
           </div>
          </div>
         <div class="responsive">
           <div class="gallery">
               <a target="_blank" href="resources/pics/IMG-20181128-WA0030.jpg">
                   <img src="resources/pics/IMG-20181128-WA0030.jpg" alt="duty" width="600" height="400">
              </a>
              <div class="desc">Bro Romanus</div>
            </div>
         </div>   
         <div class="responsive">
           <div class="gallery">
               <a target="_blank" href="resources/pics/IMG-20181128-WA0043.jpg">
                   <img src="resources/pics/IMG-20181128-WA0023.jpg" alt="duty" width="600" height="600">
              </a>
              <div class="desc">Enjoying God's grace </div>
            </div>
         </div> 
           <div class="responsive">
           <div class="gallery">
               <a target="_blank" href="resources/pics/IMG-20181128-WA0001.jpg">
                   <img src="resources/pics/IMG-20181128-WA0001.jpg" alt="duty" width="600" height="400">
              </a>
               <div class="desc">In the presence of God <br> All things are possible</div>
            </div>
         </div> 
           <div class="clearfix"></div>
            </div>
            <!-- Footer -->
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
                        <input class="input-lg" style="color:#000" type="email" name="customer_email" placeholder="enter your email and subscribe"/><input class="btn-danger btn" type="submit" name="subscribe" value="Subscribe" /> <br>
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
