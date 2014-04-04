<?php
/*
 * Author :Cherry Jose 
 * File Name:Create.php
 * Description:To Create new player
 * Date:18/3/2014
 */
if(isset($_SESSION['name']))                                         //checking whether the user is logined in or not
{
require_once 'include/connect.php';                                     // Including the database connectivity
session_start();
$user= $_SESSION['name']; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['filep'])) {      //Checking whether the form has posted the values
    $firstname = $_POST["firstName"];                                       //Getting the form value to variables
    $lastname = $_POST["lastName"];
    $contact = $_POST["contact"];
    $company = $_POST["company"];
    $po = $_POST["po"];
    $folder = "images/";
    $errflag = false;
    $msg="";
    $errmsg_arr="";

    move_uploaded_file($_FILES["filep"]["tmp_name"], "$folder" . $_FILES["filep"]["name"]); // moving the file to folder

    echo "<p align=center>File " . $_FILES["filep"]["name"] . "loaded...";

    $image = $_FILES["filep"]["name"];

    $insert= "INSERT INTO business_contacts                                                 
    (first_name, last_name,position,company,contact,image,user)
	VALUES
    ('$firstname', '$lastname','$po','$company','$contact','$image','$user')";              //Insertion to database

   $success = mysql_query($insert)or die(mysql_error());
                                                                                             //checking whether the insertion was successful or not 
   if (!$success) {                                                                                 
    //echo $_SESSION['status'];
    $_SESSION['status'] = "<div id='errorMsg' class='style'>
      error   ".$msg."
         </div>";
   header("location:business_contact.php");
    
     
} else {
   $_SESSION['status'] = "<div id='sucessMsg' class='style'>
         Your data has been saved!!
         </div>";
   //echo "success";

   header("location:business_contact.php");
}
}
}
else{
    header('location:contactme.php');
}
?>