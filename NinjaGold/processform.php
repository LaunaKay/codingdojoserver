<?php
session_start();
date_default_timezone_set('America/Los_Angeles');
$_SESSION['building'] = rand(10,20);
$_SESSION['cave'] = rand(5,10);
$_SESSION['house'] = rand(2,5);
$_SESSION['casino'] = rand(-50, 50);
$_SESSION['logDate'] = date("m/d/y h:i:s");

if (isset($_POST['action']) && $_POST['action'] == "building")
{
    $_SESSION['score'] += $_SESSION['building'];
// open and write to log
    $logFile = "log.html";
    $fh = fopen($logFile, 'a') or die("can't open file");
    $_SESSION['log'] = "<p>You entered a farm and earned {$_SESSION['building']} golds.({$_SESSION['logDate']})</p> \r\n";
    fwrite($fh, $_SESSION['log']);
    fclose($fh);
    header('Location:index.php');
}

if (isset($_POST['action']) && $_POST['action'] == "cave")
{
    $_SESSION['score'] += $_SESSION['cave'];
//open and write to log
    $logFile = "log.html";
    $fh = fopen($logFile, 'a') or die("can't open file");
    $_SESSION['log'] = "<p>You entered a cave and earned {$_SESSION['cave']} golds. ({$_SESSION['logDate']})</p>\r\n";
    fwrite($fh, $_SESSION['log']);
    fclose($fh);
    header('Location:index.php');
}

if (isset($_POST['action']) && $_POST['action'] == "house")
{
    $_SESSION['score'] += $_SESSION['house'];
//open and write to log
    $logFile = "log.html";
    $fh = fopen($logFile, 'a') or die("can't open file");
    $_SESSION['log'] = "<p>You entered a house and earned {$_SESSION['house']} golds.({$_SESSION['logDate']})</p> \r\n";
    fwrite($fh, $_SESSION['log']);
    fclose($fh);
    header('Location:index.php');
}

if (isset($_POST['action']) && $_POST['action'] == "casino")
{
    $_SESSION['score'] += $_SESSION['casino'];
//open and write to log
    $logFile = "log.html";
    $fh = fopen($logFile, 'a') or die("can't open file");
    if($_SESSION['casino'] < 0)
        $_SESSION['log'] = "<p class='lost'>You entered a casino and lost {$_SESSION['casino']} golds. OUCH! ({$_SESSION['logDate']})</p> \r\n";
    else
        $_SESSION['log'] = "<p>You entered a casino and earned {$_SESSION['casino']} golds. ({$_SESSION['logDate']})</p> \r\n";

    fwrite($fh, $_SESSION['log']);
    fclose($fh);
    header('Location:index.php');
}

if (isset($_POST['action']) && $_POST['action'] == "reset")
{
//create a file handler by opening the file
    $TextFileHandler = @fopen("log.html","r+");

//truncate the file to zero
//or you could have used the write method and written nothing to it
    @ftruncate($TextFileHandler, 0);

//use location header to go back to index.html

    session_destroy();
    session_start();
    $_SESSION['score'] = 0;
    header("Location:index.php");
}
?>