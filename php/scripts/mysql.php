<?php
    $server = "mysql1.gear.host";
    $username = "ormaxlaskenta";
    $password = "monier!";
    $database = "ormaxlaskenta";

    // Create connection
    $conn = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>