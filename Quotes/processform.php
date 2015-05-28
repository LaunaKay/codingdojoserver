<?php
session_start();
session_destroy();
session_start();
date_default_timezone_set('America/Los_Angeles');
require_once('new_connection.php');

//===========SET VARIABLES=============
$_SESSION['error_name'] = false;
$_SESSION['error2_name'] = false;
$_SESSION['error_quote'] = false;
$_SESSION['msg_name'] = "You must complete this field";
global $connection;

//===========SET ERRORS (VALIDATION)=============

if (empty($_POST['name']))
    $_SESSION['error_name'] = 'true';
else
{
    $name_content = $_POST['name'];
    $name_pattern = '/^[a-zA-Z]*$/';
    preg_match($name_pattern, $name, $name_matches);
    if($name_matches = 0) {
       $_SESSION['error2_name'] = true;
   }
}

if (empty($_POST['quote']))
    $_SESSION['error_quote'] = true;


//=================== REDIRECT BASED ON VALIDATION ========================

if ($_SESSION['error_name'] == true || ($_SESSION['error2_name'] == true))
{
        header('Location:index.php');
}

else
{
    $insert_query = "INSERT INTO quotes.quotes(quote, name) VALUES('{$_POST['quote']}', '{$_POST['name']}')";
    mysqli_query($connection, $insert_query);
    header('Location:quotes.php');
}

?>