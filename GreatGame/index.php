<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Great Number Game</title>
    <meta name="description" content="Dynamically generated using PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
	<link rel="icon" type = "image/png" href="LK_Favicon.png">
</head>
<body>
    <div id = "body_div">
    		<h1>Welcome to the Great Number Game!</h1>
            <h3>I am thinking of a number between 1 and 100.</h3>
            <h3>Take a guess!</h3>
    		<form action = "processform.php" method="POST">
                <input name = "guess" type = "text" />
    			<input name="mySubmit" type="Submit" onclick = "submit" />
    		</form>
    </div>
    <div id = "noNum" <?php if ($_SESSION['guess'] == null){
            echo "style='display:block'"; }?> >
            <h3>You didn't enter a number!</h3>
    </div>
    <div id = "tooLow" <?php if ($_SESSION['guess'] < $_SESSION['number'])
            echo "style='display:block'"; ?> >
            <h3>Too low!</h3>
    </div>
    <div id = "tooHigh" <?php if ($_SESSION['guess'] > $_SESSION['number'])
            echo "style='display:block'"; ?> >
                 <h3>Too high!</h3>
    </div>
    <div id = "correct" <?php if ($_SESSION['guess'] == $_SESSION['number'])
            echo "style='display:block'"; ?> >
            <h3> <?php echo $_SESSION['number']; ?> was the number!</h3>
            <form action = 'newsession.php'>
                <input type="submit" name = "reset" value="Play again!" onclick="submit">
            </form>
    </div>
</body>
</html>