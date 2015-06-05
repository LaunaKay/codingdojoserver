<html>
<head>
    <title>Ninja Gold</title>
    <link rel="stylesheet" type="text/css" href="/assets/stylesheet.css">
    <link rel="icon" type="image/png" href="assets/LK_Favicon.png">
</head>
<body>
    <div>
        <h1>Welcome to Ninja Gold!</h1>
        <h3>Click on a building to earn gold</h3>
        <h2>Score:
            <?= $this->session->userdata('score'); ?></h2>
            <form id = "resetForm" action = '/reset' method = 'POST'>
                <input class = "submitBtn" type = "submit" value = "RESET">
            </form><br>
            <form class = "goldForm" action = 'Ninjas/process_gold' method = 'POST'>
                <h4>Farm: Earn 10-20 gold</h4>
                <input class = "submitBtn" type = "submit" value="Find Gold" name = "farm">
            </form>
            <form class = "goldForm" action = 'Ninjas/process_gold' method = 'POST'>
                <h4>Cave: Earn 5-10 gold</h4>
                <input class = "submitBtn" type = "submit" value="Find Gold" name = "cave">
            </form>
            <form class = "goldForm" action = 'Ninjas/process_gold' method = 'POST'>
                <h4>House: Earn 2-5 gold</h4>
                <input class = "submitBtn" type = "submit" value="Find Gold" name = "house">
            </form>
            <form class = "goldForm" action = 'Ninjas/process_gold' method = 'POST'>
                <h4>Casino: Earn/Lose 0-50 gold</h4>
                <input class = "submitBtn" type = "submit" value="Find Gold" name = "casino">
            </form>
        </div>
        <div id = "log">
            <h5>Activity Log</h4>
            <?= $this->session->userdata('log') ?>
        </div>

</body>
</html>