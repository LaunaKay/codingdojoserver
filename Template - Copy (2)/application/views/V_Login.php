<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login/Register</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
<?php $this->load->view('V_header_nav');?>
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6">

                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('user');?>
                    <?php echo form_open('C_Logins/Post_Registration'); ?>

                    <form role="form">
                        <legend>Register</legend>
                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="enter first name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="enter last name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="enter email address">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="enter password">
                        </div>
                        <div class="form-group">
                            <label for="email">Password Confirmation:</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm password">
                        </div>
                         <!-- <div class="form-group">
                            <input type="hidden" class="form-control" id="user_level" name="user_level" value="user">
                        </div> -->
                        <div class="form-group">
                            <button class="btn btn-default" style="margin-bottom:100px;" type="submit" role="button">Submit Registration</button>
                    </form>
                    <button type="button" class="btn btn-primary" style="margin-top:50px;">Already have an account?<a class="btn btn-default" href="/" role="button">Login</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <?php echo form_open('C_Logins/Post_Login'); ?>
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('no user');?>

                    <form role="form">
                        <legend>Login</legend>
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="enter email address">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="enter password">
                        </div>
                        <button type="submit" class="btn btn-primary">sign in</button>
                    </form>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md-1"></div>
                <div class="col-md-6" style="margin-top: 25px;">
                    <button type="button" class="btn btn-primary">Don't have an account?<a class="btn btn-default" href="/" role="button">Register</a></button>
                </div>
        </div>
    </div>



        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>