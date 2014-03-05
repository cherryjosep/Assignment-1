/*
  Document   : projects.php
  Created on : feb 27/ 2014,
  Author     : Cherry Jose
  Description: Projects Page
  
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


    </head><!-- End of Head -->



    <body>                                       <!-- Body of the page -->
        <div class="navbar navbar-inverse ">       <!-- Menu -->
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
                                <li class="active"><a href="projects.php"><i class=" icon-fire icon-white"></i>Projects</a></li>
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

        </div>                                                  <!-- End of Menu -->



        <div class="container-fluid ">          <!--  Container class contain the various Projects !-->
            <div class="row-fluid">
                <legend>
                    <h3><i class="icon-fire"></i>Projects Done</h3>
                </legend>
                <div class="span11">               
                    <div class="box span3 hero-unit">
                        <h4> Civil Registry System</h4> 
                        <img src="images/civil.png" />
                        <p></p>
                        <p>
                            Final year Project in <b>Bachelor of Computer Science and Technology,at Karunya University ,India </b>
                        </p>
                        <p>
                            Front End:Html,JavaScript,CSS
                        </p>
                        <p>
                            Back End: PHP,MySql
                        </p>
                        <p>
                            Description:<b>Web Based Civil Registry System</b> is a web application system which was focused on the Indian citizen,which 
                            help citizens to apply for different types of governmental documents such as Passport,Voter's ID,PAN Card through online 
                            through a single secured portal.
                        </p>
                    </div>
                    <div class="box span3 hero-unit">
                        <h4>Rough-Online</h4> 
                        <img src="images/rough.jpg" />
                        <p></p>
                        <p>
                            Project Worked in <b>Executive Decision Ltd,UK</b> 
                        </p>
                        <p>
                            Front End:Html,JavaScript,CSS
                        </p>
                        <p>
                            Back End: PHP,MySql
                        </p>
                        <p>
                            Position: Web Developer
                        </p>
                        <p>
                            Role in the Project: Was responsible for GUI design,maintain the site and back-end of the project.
                        </p>
                        <p>
                            Description:<b>Rough-Online</b> is a online version of the famous UK based magazine called Rough Magazine.
                        </p>
                    </div> 
                    <div class="box span3 hero-unit">
                        <h4>Air Fi</h4> 
                        <img src="images/air.png" />
                        <p></p>
                        <p>
                            Project Worked in <b>Executive Decision Ltd,UK</b> 
                        </p>
                        <p>
                            Front End:Html,JavaScript,CSS
                        </p>
                        <p>
                            Back End: PHP,MySql
                        </p>
                        <p>
                            Position: Web Developer
                        </p>
                        <p>
                            Role in the Project: Was back-end of the project.
                        </p>
                        <p>
                            Description:<b>AirFi</b> is web application where the user can get the lastest songs to listen to, attend different parties,shows of famous
                            artists. 
                        </p>
                    </div> 
                    <div class="box span3 hero-unit">
                        <h4>Trading Card</h4> 
                        <img src="images/trade.png" />
                        <p></p>
                        <p>
                            Project Worked in <b>Centennial College,Toronto</b> 
                        </p>
                        <p>
                            Front End:Html,JavaScript,CSS
                        </p>
                        <p>
                            Back End: PHP,MySql
                        </p>
                        <p>
                            Position: Web Developer
                        </p>
                        <p>
                            Description:<b>Tracking Card</b> is a website which has a trading card in it which displays the name,position and the image of the player
                            .In addition to these , the website provides the user to enter their name and the position as their wish to be displayed on the trading card.

                        </p>
                    </div> 

                </div>

            </div>
           
        </div>          <!-- /container -->

        <?php include 'include/footer.php'; ?>  <!-- Including the Footer -->


        

        <!--  javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="include/bootstrap/js/bootstrap.min.js"></script>




    </body> <!-- Ends the body -->
</html>     <!-- Ends the Html -->
