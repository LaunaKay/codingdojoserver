<html>
<head>
    <title>Login and Registration</title>
    <link rel="stylesheet" type="text/css" href="/assets/stylesheet.css">
    <link rel="icon" type="image/png" href="assets/LK_Favicon.png">
</head>
<body>
    <?php echo form_open('LoginC/process_login'); ?>
    <?php echo validation_errors(); ?>
    <?php echo $this->session->flashdata('no user');?>

        <fieldset>
             <legend>Login</legend>
            <h3>Email:</h3>
            <input type = "email" placeholder = "enter email" name = "email">
            <h3>Password:</h3>
            <input type = "password" placeholder = "enter password" name = "password">
            <input class = "submitBtn" type = "submit" value = "Submit">
        </fieldset>
    </form>

    <?php echo form_open('LoginC/process_registration'); ?>

        <fieldset>
             <legend>or Register</legend>
            <h3>First Name:</h3>
            <input type = "text" placeholder = "enter first name" name = "first_name">
            <h3>Last Name:</h3>
            <input type = "text" placeholder = "enter last name" name = "last_name">
            <h3>Email:</h3>
            <input type = "email" placeholder = "enter email" name = "email">
            <h3>Password:</h3>
            <input type = "password" placeholder = "enter password" name = "password">
            <h3>Confirm Password:</h3>
            <input type = "password" placeholder = "confirm password" name = "confirm_password">
            <input class = "submitBtn" type = "submit" value = "Submit">
        </fieldset>
    </form>
</body>
</html>