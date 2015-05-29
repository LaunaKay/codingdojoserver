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
        <form action = 'loggedoff.php' method = "POST">
            <h1>Welcome <?=$_SESSION['first_name'] ?>!</h1>
                <?php If(isset($_SESSION['errors'])) {
                    Foreach($_SESSION['errors'] as $error)?>
                        <p class = 'error'><?= $error ?></p>
                <?php Unset($_SESSION['errors']);} ?>

                <h1>Would you like to logoff?</h1>
                    <input class = "submitBtn" type="submit" value="logoff">
        </form>
    </div>


</body>
</html>