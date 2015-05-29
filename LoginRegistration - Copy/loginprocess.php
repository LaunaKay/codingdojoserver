<?php
session_start();
date_default_timezone_set('America/Los_Angeles');
require_once('new_connection.php');

//===========SET VARIABLES=============
global $connection;

//===================LOGIN FUNCTION===============================
//validate username and password - not blank, more than 5 characters, alphanumeric

// Function ValidateUNPW()
$count = 0;

if (empty($_POST['username']))
{
    $_SESSION['errors'][] = "Please provide a username";
    $count++;
}
else if (empty($_POST['password']))
{
    $_SESSION['errors'][] = "Please provide a password";
    $count++;
}

else if ((iconv_strlen($_POST['username']) < 5))
{
    $_SESSION['errors'][] = "Invalid username. Please use more than 5 characters.";
    $count++;
}
else if (!ctype_alnum($_POST['username']))
{
    $_SESSION['errors'][] = "Invalid username. Please use only letters or numbers.";
    $count++;
}
else if ((iconv_strlen($_POST['password']) < 5))
{
    $_SESSION['errors'][] = "Invalid password. Please use more than 5 characters.";
    $count++;
}
if ($count > 0)
{
    header('Location:index.php');
}

// =============================FIND USER FUNCTION =========================
// find user in database

//Function LoginUser()
//set escape variables
$esc_username = MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['username']);
$esc_password = MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['password']);

//query DB for match
$login_query = "SELECT * FROM users WHERE username= '{$esc_username}' && password = '{$esc_password}'";
$user = fetch($login_query);

//if match
if (count($user) > 0)
{
    $_SESSION['user_id'] = $user['iduser'];
    $_SESSION['first_name'] = $user['first_name'];

//already logged in - error redirect to index
    if (($_SESSION['logged_in']) == true)
    {
        $_SESSION['errors'][] = "You're already logged in.";
        header('Location:success.php');
        die();
    }
//passes through to success
    else
    {
        $_SESSION['logged_in'] = TRUE;
        header('Location:success.php');
    }
}

//no match - error redirect to index
else
{
    $_SESSION ['errors'][] = "Can't find a user with those credentials";
    Header('Location:index.php');
}

?>