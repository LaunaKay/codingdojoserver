<?php
session_start();
$_SESSION['guess'] = $_POST['guess'];

if(isset($_SESSION['number'])) {
    header('Location:index.php');
}
else {
   $_SESSION['number'] = rand(1,100);
   header('Location:index.php');
}

?>