<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Books</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
            <a class="navbar-brand" href="#">Book Reviews</a>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Add book and review</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>
        <?echo("<pre>");
        var_dump($this->session->userdata($id['username']));
        die();?>
        <h1 class="text-center">Hello,</h1>
        <div class = "container">
            <h2>Recent Book Reviews</h2>
            <div class="bookListing">
            BOOK NAME -- linked to book page
            STAR RATING
            REVIEWER:REVIEW -- linked to reviewer profile page
            POSTED ON
        </div>
        <div>
            <h1> Other Books With Reviews</h1>
            BOOKS - linked to book page
        </div>
        </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>