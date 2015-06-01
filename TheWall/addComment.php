<?php
session_start();
date_default_timezone_set('America/Los_Angeles');
require_once('wallFunctions.php');


//===========SET VARIABLES=============
global $connection;

//=======================INSERT INTO DATABASE======================
//Add validated and escaped data into database
//Function InsertData()

$esc_comment = MYSQLI_REAL_ESCAPE_STRING($connection, $_POST['comment']);
$messagesID = $_REQUEST['messagesID'];

$insert_data = "INSERT INTO comments(comment, users_id, messages_id, created, updated)
                VALUES('{$esc_comment}', '{$_SESSION['id']}', '{$messagesID}', NOW(), NOW())";

InsDelUpd($insert_data);
header('Location:success.php');