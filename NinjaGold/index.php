<?php
    session_start();
    date_default_timezone_set('America/Los_Angeles');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ninja Gold Game</title>
    <meta name="description" content="Dynamically generated using PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
	<link rel="icon" type = "image/png" href="LK_Favicon.png">
</head>
<body>
    <div id = "body_div">
    		<h1>Welcome to Ninja Gold!</h1>
            <h3>Click on a building to earn gold</h3>
            <h2>Score:
                <?php if (isset($_SESSION ['score'])) echo $_SESSION['score'] ?></h2>
            <form class = "buttonForm" action="processform.php" method="POST">
                <input type="hidden" name="action"  value="reset" />
                <input type="submit" value="RESET" />
            </form>
            <form action = "processform.php" method="POST">
                <h4>Farm: Earn 10-20 gold</h4>
    			<input type = "hidden" name = "action" value="building"/>
                <input type = "submit" value="Find Gold"/>
    		</form>
            <form action = "processform.php" method="POST">
                <h4>Cave: Earn 5-10 gold</h4>
                <input type = "hidden" name = "action" value="cave"/>
                <input type = "submit" value="Find Gold"/>
            </form>
            <form action = "processform.php" method="POST">
                <h4>House: earn 2-5 gold</h4>
                <input type = "hidden" name = "action" value="house"/>
                <input type = "submit" value="Find Gold"/>
            </form>
            <form action = "processform.php" method="POST">
                <h4>Casino: earn or lose 0-50 gold</h4>
                <input type = "hidden" name = "action" value="casino"/>
                <input type = "submit" value="Find Gold"/>
            </form>
            <div id="log_div">
                <h5>Activity Log</h5>
                <?php if (isset($_SESSION ['score'])) include ('/assets/log.html') ?>
            </div.
    </div>
</body>
</html>