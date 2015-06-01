<?php
global $connection;


//QUERY DB for multiple rows

function Fetch($query)
{
    $data = array();
    global $connection;

    $connection = mysqli_connect("localhost", "root", "root", "thewall");

    $result = mysqli_query($connection, $query);

    if($result !== false)
    {
        foreach($result as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
return $result;
}

Function GetUser($query)
{
    $query = "SELECT * FROM users WHERE username= 'lbodde' && password = 'password'";
    $user = Fetch($query);
    var_dump($user);
    die("died inside getuser");
}

$query = "SELECT * FROM users WHERE username= 'lbodde' && password = 'password'";
GetUser($query);
