<?php
global $connection;
//CREATE connection with DB
global $connection;
$connection = mysqli_connect("localhost", "root", "root", "thewall");

//QUERY DB for multiple rows returns $data for multiple rows, $result for single row

function fetch($query)
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

function InsDelUpd($query)
{
    global $connection;

    $result = mysqli_query($connection, $query);

    if(preg_match("/insert/i", $query))
    {
        return $connection->insert_id;
    }
return $result;
}