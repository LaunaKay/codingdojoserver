<html>
<head>
    <title>Delete a course</title>
    <link rel="stylesheet" type="text/css" href="/assets/stylesheet.css">
    <link rel="icon" type="image/png" href="assets/LK_Favicon.png">
</head>
<body>
    <div>
        <h1>Are you sure you want to delete the following course?</h1>
        <h2>Name:</h2>SAMPLE NAME
        <h2>Description:</h2> SAMPLE DESCRIPTION
            <form action = 'Courses/destroy' method = 'POST'>
                <input class = "SubmitBtn" type = "submit" name = "submitHome" value = "No">
                <input class = "submitBtn" type = "submit" name = "submitDestroy" value = "Yes! I want to delete this">
            </form>
    </div>
   </body>
</html>