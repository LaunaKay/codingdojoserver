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
    <title>Quotes!</title>
    <meta name="description" content="Quotes database">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
	<link rel="icon" type = "image/png" href="LK_Favicon.png"
</head>
<body>
    <div id = "body_div">
        <form action = "delete.php" method="post">
    		<h1>Quotes Library</h1>
            <?php $displayAll = "SELECT * FROM quotes.quotes ORDER BY timestamp desc";
                    $results = fetch($displayAll);
                    foreach($results as $value) {?>
                    <h5>"<?= $value['quote'] ?>"</h5>
                    <h6>~~ <?= $value['name'];?> ~~   <?= $value['timestamp'];?></h6>
                    <? } ?>
        </form>
    </div>
    <div id="footer_div">
        <a href="index.php">Back to write quote page</a>
    </div>
</body>
</html>