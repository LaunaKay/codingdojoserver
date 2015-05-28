<?php
    session_start();
    date_default_timezone_set('America/Los_Angeles');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Quotes</title>
    <meta name="description" content="Quote Database">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
	<link rel="icon" type = "image/png" href="LK_Favicon.png">
</head>
<body>
    <div id = "body_div">
    		<h1>Welcome to Quoting Dojo!</h1>
            <form action = "processform.php" method="POST">
                <h3>Name:</h3>
                <input type="text" name = "name" placeholder="Enter name"
                    <?php if ($_SESSION['error_name'] == true) echo "class = 'errorBox'"; ?> /><br>
                    <p class = "error"><?php if ($_SESSION['error_name'] == true) {
                        echo $_SESSION['msg_name'];
                    }?></p>
                <h3>My Quote:</h3>
                 <input type="text" id = "quote" name = "quote" placeholder="Enter Quote"
                    <?php if ($_SESSION['error_quote'] == true) echo "class = 'errorBox'"; ?> />
                    <p class = "error"><?php if ($_SESSION['error_quote'] == true) {
                        echo $_SESSION['msg_name'];
                    }?></p><br>
                <input id="submitBtn" type = "submit" value="Submit" />
                <input type="button" value = "See Quotes!" onClick="parent.location='quotes.php'">
    		</form>
</body>
</html>