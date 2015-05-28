<?php
session_start();
session_destroy();
session_start();
date_default_timezone_set('America/Los_Angeles');
require_once('new_connection.php');

//===========SET VARIABLES=============
$_SESSION['error_email'] = false;
$_SESSION['error2_email'] = false;
$_SESSION['msg_email'] = "You must supply your email";
$_SESSION['msg2_email'] = "Your email is not valid";
global $connection;

//===========SET ERRORS (VALIDATION)=============

if (empty($_POST['email']))
{
    $_SESSION['error_email'] = true;
}
else
{
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            $_SESSION['error2_email'] = true;
    $_SESSION['recent_email'] = $_POST['email'];
}


//=================== REDIRECT BASED ON VALIDATION ========================

if ($_SESSION['error_email'] == true || ($_SESSION['error2_email'] == true))
{
        header('Location:index.php');
}

else
{
    $insert_email = "INSERT INTO email_exercise.email_addresses(email_address) VALUES('{$_POST['email']}')";
    mysqli_query($connection, $insert_email);
    header('Location:success.php');
}

?>