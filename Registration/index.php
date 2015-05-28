<?php
    session_start();
    date_default_timezone_set('America/Los_Angeles');
    include_once('new_connection.php');
    include('processform.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome!</title>
    <meta name="description" content="Registration without database using PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
	<link rel="icon" type = "image/png" href="LK_Favicon.png">
</head>
<body>
    <div id = "body_div">
    		<h1>Welcome to Registration!</h1>
            <h2>Fill in the fields and click submit to register</h2>
            <form action = "processform.php" method="POST">
                <h3>First Name:</h3>
                <input type="text" name = "first_name" autofocus="autofocus"
                    <?php if (isset($_SESSION['msg_name']) || (isset($_SESSION['msg2_name']))) echo "class = 'errorBox'"; ?> >
                <p class = "error"> <?php if (isset($_SESSION['msg_name']))
                    echo $_SESSION['msg_name']; ?></p>
                <p class = "error"> <?php if (isset($_SESSION['msg2_name']))
                    echo $_SESSION['msg2_name']; ?></p>
                <h3>Last Name:</h3>
                <input type="text" name = "last_name"
                    <?php if (isset($_SESSION['msg_nameL']) || (isset($_SESSION['msg2_nameL']))) echo "class = 'errorBox'"; ?> />
                    <p class = "error"> <?php if (isset($_SESSION['msg_nameL']))
                    echo $_SESSION['msg_nameL']; ?></p>
                <p class = "error"> <?php if (isset($_SESSION['msg2_nameL']))
                    echo $_SESSION['msg2_nameL']; ?></p>
                <h3>Email:</h3>
                <input type="email" name = "email"
                    <?php if (isset($_SESSION['msg_email'])) echo "class = 'errorBox'"; ?> />
                    <p class = "error"> <?php if (isset($_SESSION['msg_email']))
                        echo $_SESSION['msg_email']; ?></p>
                <h3>Password:</h3>
                <input type="password" name = "password"
                    <?php if (isset($_SESSION['msg_password']) || (isset($_SESSION['msg2_password']) || (isset($_SESSION['msg3_password'])))) echo "class = 'errorBox'"; ?> />
                    <p class = "error"> <?php if (isset($_SESSION['msg_password']))
                        echo $_SESSION['msg_password']; ?></p>
                    <p class = "error"> <?php if (isset($_SESSION['msg2_password']))
                        echo $_SESSION['msg2_password']; ?></p>
                    <p class = "error"> <?php if (isset($_SESSION['msg3_password']))
                        echo $_SESSION['msg3_password']; ?></p>
                <h3>Verify Password:</h3>
                <input type="password" name = "verify_password" />
                <h3>Birth Date:</h3>
                <input type="date" name = "birth_date" autocomplete = "on"
                    <?php if (isset($_SESSION['msg_birth'])) echo "class = 'errorBox'"; ?> />
                    <p class = "error"> <?php if (isset($_SESSION['msg_birth']))
                        echo $_SESSION['msg_birth']; ?></p>
                <h3>Please upload a profile pic</h3>
                <input type = "file" name="fileToUpload"
                     <?php if (isset($_SESSION['msg_file'])) echo "class = 'errorBox'"; ?> />
                    <p class = "error"> <?php if (isset($_SESSION['msg_file']))
                        echo $_SESSION['msg_file']; ?></p>
                <input type = "submit" value="Register" />
    		</form>
</body>
</html>