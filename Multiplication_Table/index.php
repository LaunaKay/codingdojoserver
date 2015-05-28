<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Multiplication Table</title>
        <meta name="description" content="Dynamically generated multiplication table using PHP">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesheet.css">
    	<link rel="icon" type = "image/png" href="LK_Favicon.png">
    </head>
    <body>
    	<div id = "body_div">
    		<h1>MULTIPLICATION TABLE</h1>
    		<ul>
			<?php 
			for ($y = 0; $y <= 10; $y++)
			{
				echo "<li class = 'numberBold'><p>$y</p></li>";
			}

			for ($i = 1; $i <= 10; $i++)
			{
				echo "</ul>";
				echo "<ul>";
				if ($i % 2 === 0)
				{
					echo "<li class = 'number'><p>$i</p></li>";				
					for ($x = 1; $x <=10; $x++)
					{
						echo "<li class = 'number'><p>" . $i*$x . "</p></li>";
					}
				}
				else
				{
					echo "<li class = 'numberBack'><p>$i</p></li>";				
					for ($x = 1; $x <=10; $x++)
					{
						echo "<li class = 'numberBack'><p>" . $i*$x . "</p></li>";
					}
				}
			}
			?>
			</ul>
		</div>
    </body>
</html>