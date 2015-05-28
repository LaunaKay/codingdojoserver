<?php
session_start();
session_destroy();
session_start();
date_default_timezone_set('America/Los_Angeles');


//reset error message flags
$_SESSION['msg_name'] = false;
$_SESSION['msg2_name'] = false;

if (empty($_POST['first_name']))
    $_SESSION['msg_name'] = 'true';

if(isset($_POST['first_name']))
{
    $name_content = $_POST['first_name'];
    $name_pattern = '/^[a-zA-Z]*$/';
    preg_match($name_pattern, $name_content, $name_matches);
    if($name_matches = 0) {
       $_SESSION['msg2_name'] = true;
    }
}

if (empty($_POST['last_name'])) {
    $_SESSION['error'] = true;
}

    $name_content = $_POST['last_name'];
    $name_pattern = '/^[a-zA-Z]*$/';
    preg_match($name_pattern, $name_content, $name_matches);
    if(!$name_matches[0]) {
        $_SESSION['msg2_nameL'] = "Only alphabets and white space allowed.";
        $_SESSION['error'] = true;
}

if (isset($_POST['email']))
{
    if(empty($_POST['email']))
        $_SESSION['msg_email'] = "You must supply your email";
        $_SESSION['error'] = true;
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['msg_email'] = "You must supply your email";
        $_SESSION['error'] = true;
    }
}

if (isset($_POST['password']))
{
    if(empty($_POST['password']))
        $_SESSION['msg_password'] = "You must supply a password";
        $_SESSION['error'] = true;

    if ($_POST['password'] != $_POST['verify_password'])
        $_SESSION['msg2_password'] = "Your passwords do not match";
        $_SESSION['error'] = true;

    if (iconv_strlen($_POST['password']) < 6)
        $_SESSION['msg3_password'] = "Your password must be at least 6 characters.";
        $_SESSION['error'] = true;
}

if (isset($_POST['birth_date']))
{
    if(empty($_POST['birth_date']))
        $_SESSION['msg_birth'] = "You must supply a birth date";
        $_SESSION['error'] = true;
    $date = strtotime($_POST['birth_date']);
    $cleanDate = date('m-d-Y', $date);
}

if(isset($_POST['fileToUpload']))
{
    if(empty($_POST['fileToUpload']))
        $_SESSION['msg_file'] = "You must supply a photo";
        $_SESSION['error'] = true;
}

//display error messages
if ($_SESSION['msg_name'] == true)
        $_SESSION['msg_name'] = "You must supply your name. ";

if ($_SESSION['msg2_name'] == true)
        $_SESSION['msg2_name'] = "Only alphabets and white space allowed.";

if ($_SESSION['msg_nameL'] == true)
        $_SESSION['msg_nameL'] = "You must supply your name. ";


if ($_SESSION['error'] == true)
{
    header('Location:index.php');
}
else
{
    $_SESSION['error'] = false;
    session_unset();
    header('Location:success.php');
}
?>