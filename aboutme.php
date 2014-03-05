<?php/*
  Document   : aboutme.php
  Created on : feb 25/ 2014,
  Author     : Cherry Jose
  Description: About me
  
 */?>
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
                                <li class="active"><a href="aboutme.php"><i class="icon-leaf icon-white"></i>About Me</a></li>
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

        </div>                                   <!-- End of Menu -->



        <div class="container-fluid ">          <!--  Container class  !-->
            <div class="row-fluid hero-unit">
                <legend>
                    About Me
                </legend>
                <div class="span5">             <!--  Div contain Picture and information !-->
                    <h4>
                        <i class="icon-picture"></i>  A Picture of me
                    </h4>
                    <img src="images/ch.jpg" />
                    <p>

                    </p>
                    <p>
                    <h4>
                        <i class="icon-user"></i>A Bit ABout Me 
                    </h4>
                    </p>
                    <p>
                        A person who loves computers a lot and like playing games such as Cricket,Soccer,Hockey.Guy who likes to learn new interesting 
                        things. The newest adventure is <b><a href="https://www.google.ca/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&ved=0CCsQFjAA&url=http%3A%2F%2Fen.wikipedia.org%2Fwiki%2FKalaripayattu&ei=smwRU5XVJISMyAHOxoCICg&usg=AFQjCNF4Bqnz5t6g7pv4VTz8pdOPT1FBag&sig2=asZ208y2Nm5YgTUx9ZfpHQ&bvm=bv.62286460,d.aWc">Kalaripayattu</a> </b>, a form of martial art basically originated in India.
                    </p>
                </div>                              <!--  Ends Div contain Picture and information !-->
                
                <div class="span6">                 <!--  Div contain Bio-Data !-->
                    <h4> <i class="icon-leaf"></i>Bio-Data</h4> 
                    <p><h5>
                        Educational Qualification

                    </h5>
                    <p>
                        Currently doing Advanced Diploma in Software Engineering Technology in Centennial College
                    </p>
                    <p>
                        Bachelors in Computer Science and Technology
                    </p>
                    <h5>
                        Work Experince  

                    </h5>
                    <p>
                        Application Developer in Executive Decision Ltd,London,UK
                    </p>
                    <h5>
                        Skill Set  

                    </h5>
                    <p>
                        Programming Languages:Java,Php,Asp.Net,JavaScript,Jquery,C++
                    </p>
                    <h5>
                        Project Done

                    </h5>
                    <p>
                    <u>Mini Project</u>:Travel Website                     </p>

                    <p>Front End   :  PHP,CSS,JavaScript</p> 
                    <p>
                    <u>Final Year Project</u>:Web based Civil Registry System                   </p>

                    <p>Front End   :  PHP,CSS,JavaScript</p> 
                    <p>
                    <u>Projects in Executive Decision Ltd</u>:Rough-Online                   </p>

                    <p>Front End   :  PHP,CSS,JavaScript</p>
                    <p>
                        Air-fi                    </p>

                    <p>Front End   :  PHP,CSS,JavaScript</p> 



                    </p>
                </div>                                           <!-- ends Div contain Biodata !-->
            </div>                                                <!-- ends Row Fluid !-->
            
        </div>                                                     <!-- ends Container div !-->

        <?php include 'include/footer.php'; ?>


      

        <!-- javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="include/bootstrap/js/bootstrap.min.js"></script>




    </body>
    <!-- ends body div !-->
    
</html>
<!-- ends html !-->