<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HTML Table</title>
        <meta name="description" content="Dynamically generated HTML table using PHP">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesheet.css">
    	<link rel="icon" type = "image/png" href="LK_Favicon.png">
    </head>
    <body>
    	<div id = "body_div">
    		<h1>USER TABLE</h1>
    		<table>
	    		<tr>
	    			<td>User #</td>
	    			<td>First Name</td>
	    			<td>Last Name</td>
	    			<td>Full Name</td>
	    			<td>Full name in upper case</td>
	    			<td>Length of full name <span style="font-weight:normal">(without space)</span></td>
			<?php
			$users = array(
			   array('first_name' => 'Michael', 'last_name' => 'Choi'),
			   array('first_name' => 'John', 'last_name' => 'Supsupin'),
			   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
			   array('first_name' => 'Test1', 'last_name' => 'TestA'),
			   array('first_name' => 'Test2', 'last_name' => 'TestB'),
			   array('first_name' => 'Test3', 'last_name' => 'TestC'),
			   array('first_name' => 'Test4', 'last_name' => 'TestD'),
			   array('first_name' => 'Test5', 'last_name' => 'TestE'),
			   array('first_name' => 'Test6', 'last_name' => 'TestF'),
			   array('first_name' => 'Test7', 'last_name' => 'TestG'),
			   array('first_name' => 'Test8', 'last_name' => 'TestH'),
			   array('first_name' => 'Test9', 'last_name' => 'TestI'),
			   array('first_name' => 'Test10', 'last_name' => 'TestJ')
			);
			$user_no = 0;

			foreach($users as $key => $value)
			{
				$user_no ++;
				echo "</tr>";
				echo ($user_no % 5 === 0) ? "<tr class = 'grey_row'>" : "<tr>";
				echo "<td>" . $user_no . "</td>";
					foreach($value as $key2 => $value2)
						echo "<td>" . $value2 . "</td>";
				$name = implode(' ', $value);
				echo "<td>" . $name . "</td>";
				$name = strtoupper($name);
				echo "<td>" . $name . "</td>";
				$name = str_replace(' ', '', $name);
				$count = strlen($name);
				echo "<td>" . $count . "</td>";
			}
			?>
		</table>
		</div>
    </body>
</html>