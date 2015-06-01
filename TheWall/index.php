<?php
    session_start();
    date_default_timezone_set('America/Los_Angeles');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Wall</title>
    <meta name="description" content="The Wall for Coding Dojo">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
	<link rel="icon" type = "image/png" href="LK_Favicon.png">
</head>
<body>
    <div id = "body_div">
    		<h1>hello, world</h1>
                <form action = "loginprocess.php" method="POST">
                    <fieldset>
                        <legend>please login</legend>
                            <h3 class = login>Username:</h3>
                            <input type = "text" class="login" name="username" placeholder="enter username">
                            <input type = "hidden" name = "login" value = "login">
                            <h3>Password:</h3>
                            <input type="password" class="login" name="password" placeholder="enter password">
                            <input class="submitBtn" type = "submit" value="Submit" />
                        </fieldset>
                                <table>
                                    <tr>
                                <?php If(isset($_SESSION['errors']))
                                {
                                    Foreach($_SESSION['errors'] as $error)
                                    echo "<td><p class = 'error'>{$error}</p></td></tr><tr>";
                                 }
                                    Unset($_SESSION['errors']); ?>
                                </table>
                           </form>
                <form action = "registrationprocess.php" method="POST">
                    <input type = "hidden" name = "registration" value = "registration">
                    <h4> Please register if you do not already have a login</h4>
                    <fieldset>
                        <h3> First Name:</h3>
                        <input type="text" name = "first_name" placeholder="Enter first name">
                        <h3> Last Name:</h3>
                        <input type="text" name = "last_name" placeholder="Enter last name">
                        <h3> Email:</h3>
                        <input type="email" name = "email" placeholder="Enter email">
                        <h3> Username:</h3>
                        <input type="text" name = "username" placeholder="Enter username">
                        <h3> Password:</h3>
                        <input type="password" name = "password" placeholder="Enter password">
                        <input class="submitBtn" type = "submit" value="Submit" />
                    </fieldset>
                </form>
</body>
</html>