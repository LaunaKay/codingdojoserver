<!DOCTYPE html>
<html lang="english">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>What's Up</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="navbar">
            <a class="navbar-brand" href="#">appointments</a>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="logout">Logout</a>
                </li>
            </ul>
        </div>
        <div class = "container">
            <h1 class="text-center" style="margin-bottom:50px;">Hello, <?=$id['name']?></h1>

            <h2 style="margin-bottom:50px;">Here are your appointments for today: <?=date("M d, Y")?></h2>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Tasks</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($today)
                            foreach($today as $task)
                    {?>
                    <tr>
                        <td><?=$task['task']?></td>
                        <td><?=$task['time']?></td>
                        <td><?=$task['status']?></td>
                        <td><a href="edit/<?=$task['id']?>">Edit</td>
                        <td><a href="deleteTask/<?=$task['id']?>">Delete</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="container" style="margin-top:100px;">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Tasks</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <h2>Your other appointments:</h2>
                    <?php if($future)
                            foreach($future as $task)
                    {?>
                    <tr>
                        <td><?=$task['task']?></td>
                        <td><?=$task['date']?></td>
                        <td><?=$task['time']?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <div style="margin-top:100px; width: 50%">
            <h3 style="color:red"><?= validation_errors(); ?></h3>
            <h3 style="color:red"><?= $this->session->flashdata('user');?></h3>
            <form action="addTask" method="POST" role="form">
                <legend>Add Appointment</legend>

                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="time" class="form-control" id="time" name="time">
                </div>
                <div class="form-group">
                    <label for="tasks">Task:</label>
                    <input type="text" class="form-control" id="task" name="task">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
    </body>
</html>