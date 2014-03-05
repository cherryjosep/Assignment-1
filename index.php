<?php/*
  Document   : index.php
  Created on : feb 23/ 2014,
  Author     : Cherry Jose
  Description: Home Page
 */?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cherry Jose</title> <!-- Title of Page -->
        
        <!-- Style Sheet for the website inlcuding Bootstrap Frame Work !-->
        <link href="include/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="include/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="include/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- jQuery library -->
        <script src="js/jquery-1.8.2.min.js"></script>
        <!-- bxSlider Javascript file -->
        <script src="js/jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" />

         <!-- JQuery for the SLider -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.bxslider').bxSlider({
                    mode: 'fade',
                    auto:true,
                    captions: true
                });
            });
        </script>
    </head> <!-- End of Head -->



    <body>                                      <!-- Body of the page -->
        <div class="navbar navbar-inverse ">     <!-- Menu -->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">CJ Productions</a>
                    <div class="nav-collapse in collapse" style="height: auto;">
                        <div class="pull-right">
                            <ul class="nav">
                                <li class="divider-vertical"></li>
                                <li class="active"><a href="index.php"><i class="icon-home icon-white"></i>Home</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="aboutme.php"><i class="icon-leaf icon-white"></i>About Me</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="projects.php"><i class=" icon-fire icon-white"></i>Projects</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="services.php"><i class="icon-gift icon-white"></i>Services</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="https://github.com/cherryjosep/Assignment-1"><i class="icon-plane icon-white"></i>GitHub</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="contactme.php"><i class="icon-share icon-white"></i>Contact Me</a></li>
                                <li class="divider-vertical"></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>               <!-- End of Menu -->



        <div class="container-fluid ">          <!--  Container class  !-->
            <div class="row-fluid hero-unit">   <!--  Row Fluid Class !-->
                <div class="span4">             <!--  The Logo div !-->
                    <img src="images/l.png"/>
                </div>
                <div class="span8">             <!--  Welcome and Personal Tagline Div  !-->
                    <legend>
                        <h3> Welcome to My Page</h3>
                    </legend>
                    <h4>
                        <i class="icon-tags"></i>  Personal Tagline
                    </h4>
                    <p>
                        <b>My name is Cherry Jose, an application developer having bachelor degree in computer science and engineering .Has  around 3 year experience in application development. This Web site tells about me ,Projects done,Services Offered and how to Contact me  
                        </b></p>
                </div>                           <!-- Ends the Welcome and Personal Tagline Div -->
                                                 <!--  Ends Row Fluid class  !-->
            </div>
            
            <div class="row-fluid">              <!-- View My Work Div -->
                <div class="span2 hero-unit">
                    <legend> View My Work</legend>
                    <p><a href="projects.php"> Civil Registry</a></p>
                    <p><a href="projects.php">Air Fi </a></p>
                    <p><a href="projects.php">Rough Online</a></p>
                    <p><a href="projects.php">Trading Card</a></p>
                </div>                           <!-- Ends View My Work Div -->
                
                <div class="span6">
                    <ul class="bxslider">           <!-- Slider Div -->
                        <li><img src="images/civil.png"title="Civil Registry"  /></li>
                        <li><img src="images/air.png" title="Airfi" /></li>
                        <li><img src="images/rough.jpg" title="Rough-Online" /></li>
                        <li><img src="images/trade.png" title="Tracking Card" /></li>
                    </ul>
                </div>                               <!-- Ends Slider Div -->
                
                <div class="span4 hero-unit">        <!-- Keep in Touch Div -->
                    <legend>
                        Keep in Touch
                    </legend>
                    <div class="span3">
                        <h5>Face Book </h5> 
                        <a href="https://www.facebook.com/cherry.jose3"><img src="images/Facebook.png"/></a>
                    </div>  
                    <div class="span3">
                        <h5>Linked In </h5>
                        <a href="http://www.linkedin.com/profile/view?id=60993735&trk=nav_responsive_tab_profile_pic"> <img src="images/linkedin.png" /></a>
                    </div>   
                    <div class="span3">
                        <h5>Twitter  </h5>
                        <img src="images/Twitter.png" />
                    </div>   
                </div>                               <!-- Ends Keep in Touch Div -->
            </div>


        </div>                                       <!--  Ends Container class  !-->
  

    <?php include 'include/footer.php'; ?>           <!--  Including the Footer  !-->   


 

    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="include/bootstrap/js/bootstrap.min.js"></script>




</body>
<!--  Ends the Body  !-->
</html>
<!--  Ends the Html  !-->
