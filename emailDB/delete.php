<?php
session_start();
date_default_timezone_set('America/Los_Angeles');
require_once('new_connection.php');

//===========SET VARIABLES=============

global $connection;

// echo ("this is the checkbox {$_POST['checkbox']}");
// exit();

//===========DELETE SELECTED FILES============

if(!empty($_POST['checkbox']))
{
    foreach($_POST['checkbox'] as $value) {
        $query = "DELETE FROM email_exercise.email_addresses WHERE idemail_address = ('{$value}')";
        mysqli_query($connection, $query);
}
        // var_dump($result);
        // exit();
}
header('Location:success.php');
?>