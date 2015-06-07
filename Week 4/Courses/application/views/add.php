<html>
<head>
    <title>Courses</title>
    <link rel="stylesheet" type="text/css" href="/assets/stylesheet.css">
    <link rel="icon" type="image/png" href="assets/LK_Favicon.png">
</head>
<body>
    <div id = "formValues">
        <h1> Add a New Course</h1>
        <?php echo form_open('addfailed'); ?>
        <?php echo form_error('name'); ?>
        <h2>Course Name</h2>
            <input class = "inputField" type="text" name="name" <?= set_value('name'); ?>>
        <h2>Course Description</h2>
            <input class = "inputField" type="text" name="description" <?= set_value('description'); ?>>
            <input class = "submitBtn" type = "submit" value = "Add">
        </form>
            <h6> <?= $this->session->flashdata('Add'); ?>
                 <?= $this->session->flashdata('Delete');?></h6>
    </div>
    <div>
        <h1 id = "tableTitle">Courses</h1>
        <table>
        <tr>
            <th>Course Name</th>
            <th>Description</th>
            <th>Date Added</th>
            <th>Actions</th>
        </tr>
            <?php $i = 0;
            foreach($this->session->userdata('courses') as $value)
            {
                $i++;?>
            <tr class = "row<?=$i%2?>">
                <td><?=$value['name']?></td>
                <td><?=$value['description']?></td>
                <td><?=$value['date_added']?></td>
                <td><a href='getCourse/<?= $value['id']?>' >delete</a>
        </tr>
            <?}?>
   </div>
</body>
</html>