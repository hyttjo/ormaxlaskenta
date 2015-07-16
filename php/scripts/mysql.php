<?php
    $servername = "mysql1.gear.host";
    $username = "ormaxlaskenta";
    $password = "monier!";
    $database = "ormaxlaskenta";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
    }
?>