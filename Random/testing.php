<?php

$arr = Array ( [0] => Array ( [message] => "This is a test mesage by user 3" [comment] => "This is a test comment for message 6 user 3" [first_name] => 'Syd' [created] => 'May 29th, 2015' [created2] => 'May 29th, 2015' )
    [1] => Array ( [message] => 'This is a test mesage by user 2' [comment] => 'This is a test comment for message 5 user 2' [first_name] => 'Roger' [created] => 'May 29th, 2015' [created2] => 'May 29th, 2015' )
    [2] => Array ( [message] => 'This is a test message by user 4' [comment] => 'This is a test comment for message 7 user 4' [first_name] => 'Nick' [created] => 'May 29th, 2015' [created2] => 'May 29th, 2015' )
    [3] => Array ( [message] => 'This is my first test message.' [comment] => 'This is a test coment' [first_name] => 'Launa' [created] => 'May 29th, 2015' [created2] => 'May 29th, 2015' )
    [4] => Array ( [message] => 'This is a third test message.' [comment] => 'This is a test comment for a 4 message' [first_name] => 'Launa' [created] => 'May 29th, 2015' [created2] => 'May 29th, 2015' )
    [5] => Array ( [message] => 'This is a second test message' [comment] => 'This is a test comment for a message' [first_name] => 'Launa' [created] => 'May 29th, 2015' [created2] => 'May 29th, 2015' ) )
foreach($key as $value)
    echo("$value");
        foreach($value as $value2)
            echo("$value2");
