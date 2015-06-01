<?php
session_start();
date_default_timezone_set('America/Los_Angeles');
require_once('wallFunctions.php');

//===========SET VARIABLES=============
global $connection;

//=======================INSERT INTO DATABASE======================
//Add validated and escaped data into database
//Function InsertData()

$esc_message = MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['message']);

$insert_data = "INSERT INTO messages(message, user_id, created, updated)
                VALUES('{$esc_message}', '{$_SESSION['id']}', NOW(), NOW())";

InsDelUpd($insert_data);
header('Location:success.php');

?>