<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login/Registration</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <h1>Welcome!</h1>

                    <h3 style="color:red"><?php echo validation_errors(); ?></h3>
                    <h3 style="color:red"><?php echo $this->session->flashdata('user');?></h3>
                    <?php echo form_open('C_Logins/Post_Registration'); ?>

                    <form role="form">
                        <legend>Register</legend>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="enter name">
                        </div>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="enter username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="enter password">
                        </div>
                        <div class="form-group">
                            <label for="email">Password Confirmation:</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm password">
                        </div>
                        <div class="form-group">
                            <label for="email">Date Hired:</label>
                            <input type="date" class="form-control" id="date_hired" name="date_hired">
                        </div>
                         <!-- <div class="form-group">
                            <input type="hidden" class="form-control" id="user_level" name="user_level" value="user">
                        </div> -->
                        <div class="form-group">
                            <button class="btn btn-default" style="margin-bottom:100px;" type="submit" role="button">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <?php echo form_open('C_Logins/Post_Login'); ?>
                    <form role="form">
                        <legend>Login</legend>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="enter username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="enter password">
                        </div>
                        <button type="submit" class="btn btn-primary">login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>