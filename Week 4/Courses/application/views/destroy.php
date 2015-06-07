<html>
<head>
    <title>Delete a course</title>
    <link rel="stylesheet" type="text/css" href="/assets/stylesheet.css">
    <link rel="icon" type="image/png" href="assets/LK_Favicon.png">
</head>
<body>
    <div>
        <h1>Are you sure you want to delete the following course?</h1>
        <?php foreach($this->session->userdata('course') as $value)
        {?>
        <h2>Name:   <?=$value['name'];?></h2>
        <h2>Description:  <?=$value['description'];?> </h2>
        <?}?>
            <form class = "verifyForm" action = '/add'>
                <input class = "submitBtn" type = "submit" value = "No">
            </form>
            <form class = "verifyForm" action = 'verifyDelete'>
                <input id = "submitBtn2" type = "submit" value = "Yes! I want to delete this">
            </form>
    </div>
   </body>
</html>
