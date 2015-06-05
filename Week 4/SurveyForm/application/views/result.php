<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Results</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/assets/css/normalize.min.css">
        <link rel="stylesheet" href="/assets/css/main.css">
        <link rel="icon" type="image/png" href="/assets/LK_Favicon.png"
    </head>
    <body>
        <div id = "response">
            <h2>Thanks for submitting this form! You have submitted this form <?=$this->session->userdata('counter')?> times now</h2>
        </div>
        <div id = "results">
            <h2>Submitted Information</h2>
            <h3>Name:</h3>   <p><?=$this->session->userdata('userName');?></p>
            <h3>Dojo Location:</h3>   <p><?=$this->session->userdata('location');?></p>
            <h3>Favorite Language:</h3>   <p><?=$this->session->userdata('language');?></p>
            <h3>Comment:</h3>   <p><?=$this->session->userdata('comment');?></p>
        </div>
    </body>
</html>