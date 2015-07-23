<?php
    include 'mysql.php';
    
    $table = $_POST["table"];
    $first_column = $_POST["first_column"];
    $logic = $_POST["logic"];
    $first_input = $_POST["first_input"];
    $second_column = $_POST["second_column"];
    $second_input = $_POST["second_input"];

    if ($logic == "is") $logic = "=";
    if ($logic == "not") $logic = "!=";
    if ($logic == "include") $logic = "LIKE";
    if ($logic == "replace") $logic = "REPLACE";

    $query = "UPDATE ". $table ." SET ". $second_column ." = ". $second_input ." WHERE ". $first_column ." ". $logic ." ". $first_input;

    echo $second_column;
?>
