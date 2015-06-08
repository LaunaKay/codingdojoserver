<html>
<head>
    <title>Login and Registration</title>
    <link rel="stylesheet" type="text/css" href="/assets/stylesheet.css">
    <link rel="icon" type="image/png" href="assets/LK_Favicon.png">
</head>
<body>
    <div id = "header_div">
        <?php foreach($this->session->userdata('user') as $value)
        { ?>
        <h1>Welcome <?=$value['first_name']?></h1>
        <a href = 'LoginC/logout'>logoff</a>
    </div>
    <div>
        <fieldset>
            <legend>User Information</legend>
            <h2>First Name:<?=$value['first_name']?></h2>
            <h2>Last Name:<?=$value['last_name']?></h2>
            <h2>Email:<?=$value['email']?></h2>
        </fieldset>
    <?php }?>
</body>
</html>