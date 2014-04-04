<?php

/*
  Document   : user_login.php
  Created on : April 3/ 2014,
  Author     : Cherry Jose
  Description: User_login

 */

session_start();
if (isset($_SESSION['name'])) {                 //checking whether the session has started
    require_once 'include/connect.php';             // Databse connection file

    $login = ($_POST['login']);
    $password = ($_POST['password']);
    $errflag = false;
    $success = true;
    $user_type_flag = "NULL";
    if ($login == '') {
        $success = false;
        $errmsg_arr[] = 'User Name missing';
        $errflag = true;
    }
    if ($password == '') {
        $success = false;
        $errmsg_arr[] = 'Password missing';
        $errflag = true;
    }

    if ($errflag) {
        $msg = $errmsg_arr;
        session_write_close();
        header("location: ./");
    }                                                               //Checking for username and password match
    $qr1 = "SELECT * FROM user_login WHERE username='$login' AND password='$password'";
    $result = mysql_query($qr1) or die($success = false);

    $priority = "SELECT priority FROM user_login WHERE username='$login' AND password='$password'"; //checking the priority
    $priority_result = mysql_query($qr1) or die(mysql_error());
    $row = mysql_fetch_array($result);
    if ($result) {
        if ($row) {


            if ($priority == 3) {
                
            } else {
                $_SESSION['uid'] = $row[1];
                $_SESSION['name'] = $login;
                echo $_SESSION['uid'];
            }
        } else {
            $success = false;
            //$_SESSION['status']="error retrieving data";
            $msg = "Invalid Credential";

            //echo "Invalid login";
        }
    }



    //echo $_SESSION['status'];
    if (!$success) {                                                       //displaying the status messages
        $_SESSION['status'] = "<div id='errorMsg' class='style'>
      error  !! " . $msg . "
         </div>";
        ;
        header("location:contactme.php");
    } else {
        $_SESSION['status'] = "<div id='sucessMsg' class='style'>
         You Have been Successfully LogedIn
         </div>";
        // echo "Succesfully logged in !! :-)";
        header("location:business_contact.php");
    }
} else {
    header('location:contactme.php');
}
?>
