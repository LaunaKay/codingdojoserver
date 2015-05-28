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
    <link rel="stylesheet" href="stylesheetSuccess.css">
	<link rel="icon" type = "image/png" href="LK_Favicon.png"
</head>
<body>
    <div id = "body_div">
        <form action = "delete.php" method="post">
    		<h1>The email address you entered</h1> <h2><? echo $_SESSION['recent_email'] ?></h2><h1> is valid. Thank you!</h1>
            <table>
                <th>Delete?</th>
                <th>Email Address</th>
                <th>Date/time entered</th>
                <tr>
            <?php $displayAll = "SELECT * FROM email_exercise.email_addresses";
                    $results = fetch($displayAll);
                    foreach($results as $value) {?>
                    <tr><td><input name="checkbox[]" type="checkbox" value="<?= $value['idemail_address']?>"></td><td><?= $value['email_address'] ?></td><td><?= $value['email_timestamp'];?></td></tr>
                    <? } ?>
            </table>
            <input id="deleteBtn" type = "submit" value="Delete" />
        </form>
    </div>
    <div id="footer_div">
            <a href="index.php">Back to registration page</a>
    </div>
</body>
</html>