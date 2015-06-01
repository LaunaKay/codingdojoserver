<?php
session_start();
date_default_timezone_set('America/Los_Angeles');
require_once('wallFunctions.php');

//===================LOGIN FUNCTION===============================
//validate username and password - not blank, more than 5 characters, alphanumeric

// Function ValidateUNPW()

    if (empty($_POST['username']))
    {
        $_SESSION['errors'][] = "Please provide a username";
    }
    else if (empty($_POST['password']))
    {
        $_SESSION['errors'][] = "Please provide a password";
    }

    else if ((iconv_strlen($_POST['username']) < 5))
    {
        $_SESSION['errors'][] = "Invalid username. Please use more than 5 characters.";
    }
    else if (!ctype_alnum($_POST['username']))
    {
        $_SESSION['errors'][] = "Invalid username. Please use only letters or numbers.";
    }
    else if ((iconv_strlen($_POST['password']) < 5))
    {
        $_SESSION['errors'][] = "Invalid password. Please use more than 5 characters.";
    }

if (isset($_SESSION['errors']) > 0)
{
    header('Location:index.php');
}

// =============================FIND USER FUNCTION =========================
// find user in database

//Function LoginUser()

//connect to database
global $connection;
$connection = mysqli_connect("localhost", "root", "root", "thewall");

//set variables
$esc_username = strtolower(MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['username']));
$esc_password = MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['password']);

//query DB for match
$query = "SELECT * FROM users WHERE username= '{$esc_username}' && password = '{$esc_password}'";
$user = Fetch($query);
// var_dump($user);
// die('user array');

//if match
if (count($user) == 1)
{
    $_SESSION['first_name'] = $user[0]['first_name'];
    $_SESSION['id'] = $user[0]['id'];
    $_SESSION['logged_in'] = TRUE;
    header('Location:success.php');

//already logged in - error redirect to index
    if (($_SESSION['logged_in']) == true)
    {
        $_SESSION['errors'][] = "You're already logged in.";
        header('Location:success.php');
        die();
    }
}
if (count($user) > 1)
{
    echo ("Multiple users with that name. Please contact sysadmin");
}

//no match - error redirect to index
else
{
    $_SESSION ['errors'][] = "Can't find a user with those credentials";
    Header('Location:index.php');
}

?>