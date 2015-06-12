<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Display</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
<?php $this->load->view('V_header_nav'); ?>
        <h1 class="text-center">Display Users</h1>
        <div class = "container">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>ID</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($allusers as $user)
                    {?>
                    <tr>
                        <td><?=$user['first_name']?></td>
                        <td><?=$user['email']?></td>
                        <td><?=$user['id']?></td>
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