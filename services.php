/*
  Document   : services.php
  Created on : feb 27/ 2014,
  Author     : Cherry Jose
  Description: Services Offered
  
 */
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cherry Jose</title><!-- Title of Page -->
        
         <!-- Style Sheet for the website inlcuding Bootstrap Frame Work !-->
        <link href="include/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="include/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="include/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">


    </head>          <!-- End of Head -->      



    <body>                              <!-- Body of the page -->
        <div class="navbar navbar-inverse ">    <!-- Menu -->
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
                                <li ><a href="index.php"><i class="icon-home icon-white"></i>Home</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="aboutme.php"><i class="icon-leaf icon-white"></i>About Me</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="projects.php"><i class=" icon-fire icon-white"></i>Projects</a></li>
                                <li class="divider-vertical"></li>
                                <li class="active"><a href="services.php"><i class="icon-gift icon-white"></i>Services</a></li>
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

        </div>                                  <!-- End of Menu -->



        <div class="container-fluid ">          <!--  Container class different services Offered !-->
            <div class="row-fluid hero-unit">
                <legend>
                    Services Offered 
                </legend>
                <div class="span5">
                    <h4>
                        <i class="icon-picture"></i>  Web Designing
                    </h4>

                    <img src="images/web.jpg" style="width:300px;height:100px"/>
                    <p></p>
                    <p>
                        Offers good quality ,responsive web designs using the modern techniques in the market.

                    </p>

                </div>
                <div class="span5">
                    <h4>
                        <i class="icon-picture"></i>  Web Development
                    </h4>

                    <img src="images/webdeve.jpg" style="width:300px;height:100px"/>
                    <p></p>
                    <p>
                        Provides excellent web development system using various platform such as Php , .Net or Java.
                    </p>

                </div>
                <div class="span5">
                    <h4>
                        <i class="icon-picture"></i>  Software Development
                    </h4>
                    <img src="images/software.jpg" style="width:300px;height:100px" />
                    <p></p>
                    <p>
                        Provides excellent web development system using various platform such as Php , .Net or Java.
                    </p>

                </div>

                <div class="span5">
                    <h4>
                        <i class="icon-picture"></i>  Computer Servicing 
                    </h4>
                    <img src="images/pc.jpg" style="width:300px;height:100px" />
                    <p></p>
                    <p>
                        Provides excellent web development system using various platform such as Php , .Net or Java.
                    </p>

                </div>
            </div>

        </div>                   <!-- /container -->

        <?php include 'include/footer.php'; ?>       <!-- Including the Footer -->


       

        <!-- javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="include/bootstrap/js/bootstrap.min.js"></script>




    </body>                     <!-- Ends the body -->
</html>                         <!-- Ends the Html -->
