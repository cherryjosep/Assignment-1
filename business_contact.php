<?php
/*
  Document   : business_contacts.php
  Created on : Mar 1/ 2014,
  Author     : Cherry Jose
  Description: Contact me

 */
?>
<?php
session_start();
if (isset($_SESSION['name'])) {    //checking whether the user is logined in or not
    $name = $_SESSION['name'];
    require_once 'include/connect.php';  // Including the database connectivity
    //Query to select the contact information in alphabetical order
    $result = mysql_query("SELECT * FROM business_contacts WHERE user='$name' ORDER BY first_name ASC");
    if ($result === FALSE) {      //Checking whether the selection was success if not error is displayed
        die(mysql_error()); // TODO: better error handling
    }
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
            <link href="css/contact.css" rel="stylesheet">

        </head>         <!-- End of Head --> 

        <body>
            <div class="row-fluid>"<!-- Body of the page -->
    <?php include 'header.php'; ?>                           <!-- End of Menu -->


                 <div class="container-fluid ">          <!--  Container class contain the Business Contacts !-->
                    <div class="row-fluid">
                        <legend>
                            <h3><i class="icon-fire"></i>Business Contacts</h3> 
                        </legend>   
                        <div class="span10">
                            <div class="span6">
                                <h4>
                                    Contacts List
                                </h4>
                                <table border="0" cellpadding="2px" width="400px">              <!-- Displaying the contact information !-->
                                            <?php
                                            while ($row = mysql_fetch_array($result)) {
                                                $image = $row["image"];

                                                $path = "images/";
                                                $imageurl = $path . $image;
                                                ?>
                                        <tr>
                                            <td>
                                                <img src="<?php echo $imageurl ?>" style="width:100px;height:100px"/>
                                            </td>
                                                
                                            <td>
                                                        <b><div id="Name"><?php echo $row['first_name'];
                                                        echo "    ";
                                                        echo $row['last_name']; ?></b><br /></div>
                                                        <div id="details"><?php echo $row['position']; ?><br />
                                                        <?php echo $row['company']; ?><br />
                                                        <?php echo $row['contact']; ?></big><br /><br /></div>
                                                    
                                             </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr size="1" />
                                            </td>
                                             <?php } ?>      
                                </table>
                            </div>
                            <div class="span6">                 <!-- Form to insert new contacts !-->
                                <h4>
                                    Add new Contacts
                                </h4>
                                <form method="post" action="create.php" name="loginform" enctype="multipart/form-data">
                                    <table>
                                        <tr><td>First Name </td><td>:<input required type="text" name="firstName" id="firstName" /><br />
                                            </td>
                                        </tr>
                                        <tr><td> Last Name </td><td>:<input required type="text" name="lastName" id="lastName" /><br />
                                            </td>
                                        </tr>

                                        <tr><td> Position</td><td>:<input required type="text" name="po" id="po"/><br />
                                            </td>
                                        </tr>
                                        <tr><td>Company</td><td>:<input required type="text" name="company" id="company"/><br />
                                            </td>
                                        </tr>
                                        <tr><td>Contact Number</td><td>:<input required type="text" name="contact" id="contact"/><br />
                                            </td>
                                        </tr>
                                        <tr><td> Upload  Pic</td><td>:<input type="file" name="filep" id="filep"><br />
                                            </td>
                                        </tr>

                                        <tr><td></td><td><input type="submit" name="submit" value="Submit" id="submit"/></td>

                                        </tr>
                                    </table>    
                                </form>
                            </div>
                        </div>
                    </div>

                </div>  
            </div>
    <?php include 'include/footer.php'; ?>
            <!-- /container -->

            <!-- javascript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="js/jquery.js"></script>
            <script src="include/bootstrap/js/bootstrap.min.js"></script>
            <script src="js/jquery-1.7.1.min.js"></script>


    <?php if (isset($_SESSION['status'])) { ?>                  <!-- TO display the error message !-->
                <div class="alert alert-block fade in navbar-fixed-top span5 offset4 pull-right">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <p> <?php
        echo $_SESSION['status'];
        unset($_SESSION['status']);
        ?></p>
                </div>
    <?php } ?>

        </div>
    </body>      <!--  Ends the Body !-->
<?php } else {
    header('location:contactme.php');
} ?>
</html>              <!--  Ends the Html !-->
