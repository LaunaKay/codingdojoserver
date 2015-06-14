<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Wish List</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
<?php $this->load->view('V_header_nav'); ?>

        <h1 class="text-center">Hello, <?=$wishlist[0]['name']?></h1>
        <div class = "container">
            <h2>Your Wish List</h2>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Added By</th>
                        <th>Date Added</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($wishlist as $wish)
                    {?>
                    <tr>
                        <td><a href='wish_items/<?=$wish['id']?>'</a><?=$wish['item']?></td>
                        <td><?=$wish['name']?></td>
                        <td><?=$wish['date_added']?></td>
                        <td><a href='remove/<?=$wish['id']?>'</a>REMOVE ITEM</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="container" style="margin-top:100px;">
            <table class="table table-hover table-striped">
                <h2>Other Users' Wish List</h2>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Added By</th>
                        <th>Date Added</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach($wishes as $wish)
                    {?>
                    <tr>
                        <td><?=$wish['item']?></td>
                        <td><?=$wish['name']?></td>
                        <td><?=$wish['date_added']?></td>
                        <td><a href="addtolist/10">Add to Wishlist</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>