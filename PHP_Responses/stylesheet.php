<?php header("Content-type: text/css; charset: UTF-8"); ?>

h1 {
	<?php
		$random_r = rand(1,255);
		$random_g = rand(1,255);
		$random_b = rand(1,255);
			echo "color: rgb({$random_r}, {$random_g}, {$random_b})";
	?>
	}

p {
	<?php
		$random_r1 = rand(1,255);
		$random_g1 = rand(1,255);
		$random_b1 = rand(1,255);
			echo "color: rgb({$random_r1}, {$random_g1}, {$random_b1})";
	?>
	}
	