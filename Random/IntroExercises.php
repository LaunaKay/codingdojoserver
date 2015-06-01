<?php

// //Print odd numbers from 1:1000
// for($i = 1; $i<=1000; $i+=2)
// {
//     echo $i;
//     echo '<br>';
// }

// //Print multiples of 5 from 5:1000000
// for($i = 5; $i <= 1000000; $i += 5)
// {
//     echo $i;
//     echo '<br>';
// }

// //print sum of arrayA
// $sum = 0;
// $array = array(1,2,5,10,255,3);

// foreach($array as $value)
// {
//     $sum+=$value;
//     echo $sum;
//     echo '<br>';
// }
// echo 'The final sum of this array is: '.$sum;

// //create array 1:20000(odd) and var_dump
// $array = array();

// for ($i = 1; $i <= 20000; $i+=2)
// {
//     array_push($array, $i);
// }

// var_dump($array);

// //count 1:2000, generate statements
// for ($i = 1; $i <= 2000; $i++)
// {
//     if ($i % 2 === 0)
//     {
//         echo "The number is {$i}. This is an even number.";
//         echo "<br>";
//     }
//     else
//     {
//         echo "The number is {$i}. This is an odd number.";
//         echo "<br>";
//     }
// }

// //multiply function that creates array with multiple as passed in

// function multiply ($array,$n)
// {
//     $newArray = (array());
//     foreach ($array as $value) {
//         array_push($newArray, ($value * $n));
//     }
//     print_r($newArray);
// }
// multiply(array(1,2,3,4,5), 5);

// //Create HTML list from values in array
// function print_lists($array)
// {
//     echo "<ul>";
//     foreach($array as $value)
//     {
//         echo "\t";
//         echo "<li>$value</li>";
//     }
//     echo "</ul>";
// }

// print_lists(array(2, 3, "hello"));

//Print array contents in key:value pairs

// function Output_Array($users)
// {
// 	// $users = array(
// 	// 	'first_name' => "Launa",
// 	// 	'last_name' => "Bodde");

// 	echo "There are ".count($users)." keys in this array";
// 	echo "<br>";

// 	foreach($users as $key => $value)
// 	{
// 		echo "The value in the key ". $key . " is ".$value;
// 		echo "<br>";
// 	}
// }

// Output_Array($users=array('first_name' => "launa", 'last_name' => "bodde"));

//	// Display score and grade based on randomly generated score, 100 times
// function Score_and_Grade()
// {
// 	for ($i = 1; $i <= 100; $i++)
// 	{
// 		$score = rand(50,100);

// 		if ($score < 70)
// 		{
// 			echo "<h1>Your Score: ". $score . "/100</h1>";
// 			echo "<br>";
// 			echo "<h2>You grade is D</h2>";
// 			echo "======================<br>";
// 		}
// 		elseif ($score>=70 && $score < 80)
// 		{
// 			echo "<h1>Your Score: ". $score . "/100</h1>";
// 			echo "<br>";
// 			echo "<h2>You grade is C</h2>";
// 			echo "======================<br>";
// 		}
// 		elseif ($score >= 80 && $score <= 90)
// 		{
// 			echo "<h1>Your Score: ". $score . "/100</h1>";
// 			echo "<br>";
// 			echo "<h2>You grade is B</h2>";
// 			echo "======================<br>";
// 		}
// 		elseif ($score >=90 && $score <= 100)
// 		{
// 			echo "<h1>Your Score: ". $score . "/100</h1>";
// 			echo "<br>";
// 			echo "<h2>You grade is A</h2>";
// 			echo "======================<br>";
// 		}
// 	}
// }

// Score_and_Grade();

//Create dropdown menus using php
// function States_menu1()
// {
// 	$states = array('CA','WA','VA','UT','AZ');

// 	echo "<select>";

// 	for($i = 0; $i < count($states); $i++)
// 	{
//   		echo "<option>$states[$i]</option>";
//   	}
//   	echo "</select>";
// }

// States_menu1();


// function States_menu2()
// {
// 	$states = array('CA','WA','VA','UT','AZ');

// 	echo "<select>";

// 	foreach ($states as $value)
// 	{
//   		echo "<option>$value</option>";
//   	}
//   	echo "</select>";
// }

// States_menu2();

// function States_menu3()
// {
// 	$states = array('CA','WA','VA','UT','AZ','NJ','NY','DE');

// 	echo "<select>";

// 	foreach ($states as $value)
// 	{
//   		echo "<option>$value</option>";
//   	}
//   	echo "</select>";
// }

// States_menu3();

// //Coin Throw - simulate coin toss 5000 times

// Function Coin_Throw()
// {
// 	$result = 0;
// 	$heads_sum = 0;
// 	$tails_sum = 0;

// 	for ($i = 1; $i <= 5000; $i++)
// 	{
// 		$result = rand(0,1);

// 		if ($result == 0)
// 		{
// 			$heads_sum++;
// 			echo "Attempt #" . $i . ": Throwing a coin... It's a head! ... Got " . $heads_sum . " heads so far and " . $tails_sum . " tails so far.";
// 			echo "<br>";
// 		}
// 		else
// 		{
// 			$tails_sum++;
// 			echo "Attempt #" . $i . ": Throwing a coin... It's tails! ... Got " . $heads_sum . " heads so far and " . $tails_sum . " tails so far.";
// 			echo "<br>";
// 		}
// 	}
// }

// Coin_Throw();

// //Get Min and Max: take array and return min and max as an associative array

// Function Min_and_Max($inArray)
// {
// 	$maxNum = $inArray[0];
// 	$minNum = $inArray[0];


// 	foreach($inArray as $value)
// 	{
// 		if ($value > $maxNum)
// 			$maxNum = $value;
// 		elseif ($value < $minNum)
// 			$minNum = $value;
// 	}

// 	$outputArray = array('Maximum Number' => $maxNum, 'Minimum Number' => $minNum);
// 	var_dump($outputArray);
// }


// Min_and_Max(array(135, 2.4, 2.67, 1.23, 332, 2, 1.02))


// //Draw Stars - draw asterisks for every number in an array

// Function Draw_Stars($array)
// {
// 	foreach($array as $value)
// 	{
// 		for($i = 1; $i <= $value; $i++)
// 		{
// 			echo "*";
// 		}
// 		echo "<br>";
// 	}
// }
// Draw_Stars(array(5,2,6,8,10,2,4,3,5,9));

function multiply ($array,$n)
{
    foreach ($array as $value){

        $value=($value*$n);
    }
    print_r($array);
}
multiply (array(1,2,3,4,5), 5);

?>

