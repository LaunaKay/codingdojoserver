<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Response Form</title>
        <meta name="description" content="Dynamically generated Survey Form using PHP">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="icon" type = "image/png" href="LK_Favicon.png">
    </head>
    <body>
        <div id = "body_div">
            <h1>Response Form</h1>
            <?php
            echo "
                <h4>Your Name:</h4> <p>{$_POST['name']}</p>
                <h4>Dojo Location:</h4> <p>{$_POST['location']}</p>
                <h4>Favorite Language:</h4> <p>{$_POST['language']}</p>
                <h4>Comment:</h4> <p>{$_POST['comment']}</p>
            " ?>
            <button onclick="window.history.back()">Go Back</button>
        </div>
    </body>