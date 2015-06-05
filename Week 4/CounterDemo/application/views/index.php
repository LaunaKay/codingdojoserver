<!DOCTYPE>
<html>
<head>
    <title>Number Game</title>

</head>
<body>
    <?= $this->session->userdata['number'] ?>
    <div id = "container">
    <h1> Welcome to the game!</h1>
    <p>I'm thinking of a number between 1 and 100</p>
    <p>Take a guess!</p>
    <form action = 'check' method = 'POST'>
        <input type = 'text' name = 'guess' />
        <input type = 'submit' value = 'submit' />
    </form>
    </div>


</body>
</html>