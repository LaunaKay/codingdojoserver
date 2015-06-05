<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Survey Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/assets/css/normalize.min.css">
        <link rel="stylesheet" href="/assets/css/main.css">
        <link rel="icon" type="image/png" href="/assets/LK_Favicon.png"

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <div id = "body_container">
        <h1>Coding Dojo Survey</h1>
        <form action = "/surveys/process_form" method = POST>
            <h2>Your Name:</h2>  <input type = "text" name = "userName" placeholder="Enter name">
            <h2>Dojo Location</h2> <select name = "location">
                <option value="Mountain View">Mountain View</option>
                <option value="Los Angeles">Los Angeles</option>
                <option value="Seattle">Seattle</option>
            </select>
            <h2>Favorite Language:</h2><select name = "language">
                <option value = "Javascript">Javascript</option>
                <option value = "HTML">HTML/CSS</option>
                <option value = "PHP">PHP</option>
                <option value = "Ruby">Ruby</option>
            </select>
            <h2>Comment (optional):</h2>
            <textarea name = "comment" placeholder = "enter optional comment" cols = "80" rows = "3"></textarea>
            <input id = "submit_btn" type = "submit" value = "Submit">
        </div>

    </body>
</html>
