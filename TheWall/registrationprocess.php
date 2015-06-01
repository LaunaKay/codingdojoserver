<?php
session_start();
date_default_timezone_set('America/Los_Angeles');
require_once('wallFunctions.php');

//===========SET VARIABLES=============
global $connection;

//===================VALIDATE FUNCTION===============================
//validate username and password - not blank, more than 5 characters, alphanumeric

// Function ValidateUserPass()
    if (empty($_POST['username']))
    {
        $_SESSION['errors'][] = "Please provide a username";

    }
    if (empty($_POST['password']))
    {
        $_SESSION['errors'][] = "Please provide a password";
    }

    if (isset($_POST['username']))
    {
            if ((iconv_strlen($_POST['username']) < 5))
            {
                $_SESSION['errors'][] = "Invalid username. Please use more than 5 characters.";
            }
            else if (!ctype_alnum($_POST['username']))
            {
                $_SESSION['errors'][] = "Invalid username. Please use only letters or numbers.";
            }
    }

    if ((iconv_strlen($_POST['password']) < 5))
    {
        $_SESSION['errors'][] = "Invalid password. Please use more than 5 characters.";
    }

if (count($_SESSION['errors']) > 0 )
{
    header('Location:index.php');
}

//====================== VALIDATE NAME/EMAIL ===============================
// Function ValidateNameEmail()

    if (empty($_POST['email']))
    {
        $_SESSION['errors'][] = "Please provide an email.";
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
            $_SESSION['errors'][] = "Please provide a valid email.";
    }


    if (empty($_POST['first_name']))
    {
        $_SESSION['errors'][] = "Please provide a first name.";
    }

    if (isset($_POST['first_name']))
    {
        if (!ctype_alnum($_POST['first_name']))
        {
            $_SESSION['errors'][] = "Invalid first name. Please use only letters or numbers.";
        }
    }

    if (empty($_POST['last_name']))
    {
        $_SESSION['errors'][] = "Please provide a last name.";
    }

    if (isset($_POST['last_name']))
    {
        if (!ctype_alnum($_POST['last_name']))
        {
            $_SESSION['errors'][] = "Invalid last name. Please use only letters or numbers.";
        }
    }

if (count($_SESSION['errors'] > 0))
{
    header('Location:index.php');
}


// =============================FIND USER FUNCTION =========================
// find if duplicate username in database

//Function DuplicateUser()
//set escape variables
$esc_username = MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['username']);
$esc_password = MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['password']);

//query DB for match
$login_query = "SELECT * FROM users WHERE username= '{$esc_username}'";
$user = Fetch($login_query);

//if match
if (count($user) > 0)
{
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['first_name'] = $user['first_name'];
    $_SESSION['errors'][] = "A login for that username already exists.";
    header('Location:index.php');
}


else
{
//=======================INSERT INTO DATABASE======================
//Add validated and escaped data into database
//Function InsertData()
$esc_username = MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['username']);
$esc_password = MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['password']);
$esc_first_name = MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['first_name']);
$esc_last_name = MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['last_name']);
$esc_email = MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['email']);

$insert_data = "INSERT INTO users(username, password, first_name, last_name, email) VALUES('{$esc_username}', '{$esc_password}', '{$esc_first_name}', '{$esc_last_name}', '{$esc_email}')";

if(mysqli_query($connection, $insert_data))
{
    $_SESSION['first_name'] = $esc_first_name;
    $_SESSION['id'] = $user['id'];
    header('Location:success.php');
}
else
{
    $_SESSION['errors'][] = "Adding user to the DB failed for some reason.";
    header('Location:index.php');
}

}
?>