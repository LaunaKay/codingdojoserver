<?php
    session_start();
    date_default_timezone_set('America/Los_Angeles');
    require_once('new_connection.php');

    //================ SET VARIABLES ==================
global $connection;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Success!</title>
    <meta name="description" content="success form for registration">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" type = "image/png" href="LK_Favicon.png"
</head>
<body>
    <div id = "body_div">
        <h1>You are logged off <?=$_SESSION['first_name'] ?>!</h1>
    </div>
    <?php session_destroy(); ?>
    <a href="index.php">return to login</p>

</body>
</html>