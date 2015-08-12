<!DOCTYPE html>
<html lang="english">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit</title>

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
                <li class="active">
                    <a href="dashboard">Dashboard</a>
                </li>
            </ul>
        </div>
        <div class = "container">
            <h1 class="text-center">Hello, <?=$id['name']?></h1>

            <h2>Edit Your Task</h2>
        <div>
            <form action="/editTask" method="POST" role="form">
                <legend>Edit Appointment</legend>

                <div class="form-group">
                    <label for="date">Date:</label>
                    <input value="<?=$task['date']?>" type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <input value="<?=$task['time']?>" type="time" class="form-control" id="time" name="time">
                </div>
                <div class="form-group">
                    <label for="tasks">Task:</label>
                    <input value="<?=$task['task']?>"type="text" class="form-control" id="task" name="task">
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" id="inputStatus" class="form-control">
                        <option value="<?=$task['status']?>"><?=$task['status']?></option>
                        <option value="Pending">Pending</option>
                        <option value="Done">Done</option>
                        <option value="Missed">Missed</option>
                    </select>
                </div>
                <input value="<?=$task['id']?>" name="id" type="hidden">
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
    </body>
</html>