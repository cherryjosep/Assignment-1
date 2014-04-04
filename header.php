<?php
/*
  Document   : header.php
  Created on : April 3/ 2014,
  Author     : Cherry Jose
  Description: Header 

 */
?>
<div class="navbar navbar-inverse ">            <!-- Header Menu for contact me page !-->
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
                                
                    <?php if (isset($_SESSION['name'])) { ?>                <!--Login,logout,Username  !-->
                        <li class="pull-right "><a href="logout.php">logout</a></li>
                        <li class="divider-vertical"></li>
                        <li class="pull-right" ><a href='#'><?php echo $_SESSION['name']; ?> </a></li>


                    <?php } else { ?>


                        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="span2 offset10">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <li>  <h3 id="myModalLabel">Login</h3> </li>
                            </div>


                            <div class="modal-body">
                                <div class="container-narrow">
                                    <form class='form-horizontal' method='post' action='user_login.php'>
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Username
                                            </label>
                                            <div class="controls">
                                                <div class="input-prepend">
                                                    <span class="add-on"><img src="include/bootstrap/img/glyphicons/png/glyphicons_003_user.png"></span>
                                                    <input class="span2" id="inputIcon" type="text" id="inputEmail" name='login' placeholder="Username" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Password</label>
                                            <div class="controls">
                                                <div class="input-prepend">
                                                    <span class="add-on"><img src="include/bootstrap/img/glyphicons/png/glyphicons_044_keys.png"></span>
                                                    <input class="span2" id="inputIcon" type="password" id="inputPassword" name='password' placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-success">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>

                            </div>
                        </div>
                        <li> <a href="#myModal" data-toggle="modal">Login</a> </li>
                                  <?php } ?>

                </ul>
            </div>
        </div>
    </div>
</div>
</div>

