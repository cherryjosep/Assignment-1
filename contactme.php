<?php
/*
Document   : Contactme.php
Created on : Mar 1/ 2014,
Author     : Cherry Jose
Description: Contact me

*/
session_start();
?>
<!-- Including the php file -->
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Cherry Jose</title>  <!-- Title of Page -->
        
        <!-- Style Sheet for the website inlcuding Bootstrap Frame Work !-->
        <link href="include/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="include/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="include/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    
    </head>         <!-- End of Head --> 
   
    <body>                                  <!-- Body of the page -->
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
                                <li><a href="index.php"><i class="icon-home icon-white"></i>Home</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="aboutme.php"><i class="icon-leaf icon-white"></i>About Me</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="projects.php"><i class=" icon-fire icon-white"></i>Projects</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="services.php"><i class="icon-gift icon-white"></i>Services</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="https://github.com/cherryjosep/Assignment-1"><i class="icon-plane icon-white"></i>GitHub</a></li>
                                <li class="divider-vertical"></li>
                                <li  class="active"><a href="contactme.php"><i class="icon-share icon-white"></i>Contact Me</a></li>
                                <li class="divider-vertical"></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>                               <!-- End of Menu -->


        <div class="container">              <!--  Container class with Contact me Form !-->
            <div class="row">
                <div class="hero-unit">
                    <h1>Let's Keep In Touch!</h1>
                    <p class="tagline">Thank you for visiting out little slice of the internet. If you would like to get into contact with our team simply fill out the nifty form below. Cheers!</p>  
                </div><!--end hero unit -->

                <section class="span6">

                    <form  name="freg" action="freg.php" method="post">

                        <div class="control-group">
                            <label class="control-label" > Full Name</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on"> <i class="icon-user"> </i> </span>
                                    <input class="span5" id="inputIcon" required type="text" name="name" id="name" placeholder="Your Name">
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" >Email</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on"> <i class="icon-envelope"> </i> </span>
                                    <input class="span5" id="inputIcon" required  type="email"  id="email" name="email" placeholder="you@yourdomain.com">
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label"> Subject</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on"> <i class="icon-question-sign"> </i> </span>
                                    <input class="span5" id="inputIcon" required type="text" class="input-xxlarge" id="sub" name="sub" placeholder="Title">
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="inputEmail"><i class="icon-pencil"></i> Message</label>
                            <div class="controls">
                                <textarea required rows="6" class="input-xxlarge" id="message" name="message" placeholder="What's on your mind?"></textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <input id="freg_button" class=" controls btn btn-success" title="Reg"  type="submit" name="Send Message" value="Send Message " />
                                <!--<button type="submit" class="btn btn-success">Send Message</button>!-->
                            </div>
                        </div>

                    </form>
                    <br class="clear">



                </section><!-- end left -->
                <section class="span6">
                    <div class="well">
                        <iframe width="500" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2250+Kennedy+Rd,+Toronto,+ON,+Canada&amp;aq=0&amp;oq=22&amp;sll=36.964861,-122.01843&amp;sspn=0.005495,0.009645&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=2250+Kennedy+Rd,+Toronto,+Toronto+Division,+Ontario+M1T+3G7,+Canada&amp;z=14&amp;ll=43.78222,-79.288349&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=2250+Kennedy+Rd,+Toronto,+ON,+Canada&amp;aq=0&amp;oq=22&amp;sll=36.964861,-122.01843&amp;sspn=0.005495,0.009645&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=2250+Kennedy+Rd,+Toronto,+Toronto+Division,+Ontario+M1T+3G7,+Canada&amp;z=14&amp;ll=43.78222,-79.288349" style="color:#0000FF;text-align:left"></a>Locate me in a larger map</small><br />
                    </div><!--end well -->
                </section><!--end right --> 
            </div><!--end row -->
                                                             <!--  Php Code for the displaying the message !-->
            <?php if (isset($_SESSION['status'])) { ?>          
                <div class="alert alert-block fade in navbar-fixed-top span5 offset4 pull-right">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <p> <?php
            echo $_SESSION['status'];
            unset($_SESSION['status']);
                ?></p>
                </div>
            <?php } ?>

        </div>
        <?php include 'include/footer.php'; ?>
        <!-- /container -->

        <!-- javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
       <script src="jquery.js"></script>
        <script src="bootstrap.min.js"></script>

      
    </body>      <!--  Ends the Body !-->
</html>              <!--  Ends the Html !-->
