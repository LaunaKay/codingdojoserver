<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>====ITEM NAME=====</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
<?php $this->load->view('V_header_nav');?>
        <h1 class="text-center"><?=$item[0]['item']?></h1>
        <div class="container">
            <h2>Users who added this product/item under their wish list</h2>
            <?php foreach($item as $name)
            {?>
            <div class="row">
                <h3><?=$name['name']?></h3>
            </div>
            <?php } ?>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>