<?php

session_start();

require_once 'include/connect.php';

$success = true;
$errflag = false;
$msg="";
$errmsg_arr="";
$name=($_POST['name']);
$email=($_POST['email']);
$sub=($_POST['sub']);
$message=($_POST['message']);

$insert="INSERT INTO `site_feedback_form`(`name`, `email`, `sub`, 
    `message`) VALUES ('$name','$email', '$sub','$message') ";
  $result1 = mysql_query($insert)or die(mysql_error());

   if (!$success) {
    //echo $_SESSION['status'];
    $_SESSION['status'] = "<div id='errorMsg' class='style'>
      error   ".$msg."
         </div>";
   header("location:contactme.php");
    
     
} else {
   $_SESSION['status'] = "<div id='sucessMsg' class='style'>
         Your data has been saved!!
         </div>";
   //echo "success";

   header("location:contactme.php");
}
   
?>
