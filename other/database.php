<?php

$servername = "localhost";
$username = "";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=twitter", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }







function fetch_all($query) {
    $data = array();
    global $connection;
    $result = $connection->query($query);

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}
//SELECT - used when expecting a single result
//returns an associative array
function fetch_record($query) {
    global $connection;
    $result = $connection->query($query);

    return mysqli_fetch_assoc($result);
}
//used to run INSERT/DELETE/UPDATE, queries that don't return a value
//returns a value, the id of the most recently inserted record in your database
function run_mysql_query($query) {
    global $connection;
    $result = $connection->query($query);

    return $connection->insert_id;
}
//returns an escaped string. EG, the string "That's crazy!" will be returned as "That\'s crazy!"
//also helps secure your database against SQL injection
function escape_this_string($string) {
    global $connection;

    return $connection->real_escape_string($string);
}
