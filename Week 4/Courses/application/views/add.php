<html>
<head>
    <title>Courses</title>
    <link rel="stylesheet" type="text/css" href="/assets/stylesheet.css">
    <link rel="icon" type="image/png" href="assets/LK_Favicon.png">
</head>
<body>
    <div>
        <h1>Add a New Course</h1>
            <form action = 'Courses/add' method = 'POST'>
                <h2>Name:</h2><input type="text" name="name">
                <h2>Description:</h2><input type="text" name="name">
                <input class = "submitBtn" type = "submit" name = "submitAdd" value = "Add">
            </form>
    </div>
    <div>
        <h1 id = "tableTitle">Courses</h1>
        <table>
        <tr>
            <td>Course Name</td>
            <td>Description</td>
            <td>Date Added</td>
            <td>Actions</td>
        </tr>
        <tr>
            <td>Sample Course name</td>
            <td>Sample Course description</td>
            <td>6/1/2015</td>
            <td><a href="courses/destroy/??">delete</a>
    </div>
</body>
</html>