<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create Item</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <?php $this->load->view('V_header_nav'); ?>
        <h1 class="text-center">Create a New Wish List Item</h1>
        <div class="container">
        <h3 style="color:red"><?php echo validation_errors(); ?></h3>
        <?php echo form_open('C_Wishes/createwish'); ?>
            <form role="form">
                <div class="form-group">
                    <label for="item">Item/Product:</label>
                    <input type="text" class="form-control" id="" name="item" placeholder="enter your wish">
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>