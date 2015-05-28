<?php
    session_start();
    date_default_timezone_set('America/Los_Angeles');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Email Entry</title>
    <meta name="description" content="Email Validation with Database">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
	<link rel="icon" type = "image/png" href="LK_Favicon.png">
</head>
<body>
    <div id = "body_div">
    		<h1>Welcome to Email Address Entry!</h1>
            <h2>Please enter a valid email</h2>
            <form action = "processform.php" method="POST">
                <input type="email" name = "email" placeholder="Enter email"
                    <?php if ($_SESSION['error_email'] == true) echo "class = 'errorBox'"; ?> />
                    <p class = "error"><?php if ($_SESSION['error_email'] == true) {
                        echo $_SESSION['msg_email'];
                    }?></p>
                    <p class = "error"> <?php if ($_SESSION['error2_email'] == true) {
                        echo $_SESSION['msg2_email'];
                    }?></p><br>
                <input id="submitBtn" type = "submit" value="Submit" />
    		</form>
</body>
</html>