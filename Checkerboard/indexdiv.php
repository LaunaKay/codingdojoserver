<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Checkerboard</title>
        <meta name="description" content="Dynamically generated checkerboard using PHP">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesheet.css">
    	<link rel="icon" type = "image/png" href="LK_Favicon.png">
    </head>
    <body>
    	<div id = "body_div">
    		<h1>CHECKERBOARD</h1>
			<?php
			for ($i = 1; $i <= 8; $i++)
			{
				// echo "<ul>";
				for ($x = 1; $x <= 4; $x++)
				{
					if ($i % 2 !== 0)
					{
						echo "<div class = 'red'></div>";
						echo "<div class = 'black'></div>";
					}
					else
					{
						echo "<div class = 'black'></div>";
						echo "<div class = 'red'></div>";
					}
				}
				// echo "</ul>";
			}
			?>
			<!-- </ul> -->
		</div>
    </body>
</html>