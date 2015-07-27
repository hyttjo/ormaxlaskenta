<?php
    include 'mysql.php';
    
    $execute = $_POST["execute"];
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

    $query = "UPDATE $table SET $second_column = '$second_input' WHERE $first_column $logic '$first_input'";
    
    echo $query;
    
    if ($execute == "false") {
        $query = "SELECT * FROM $table WHERE $first_column $logic '$first_input'";
    }

    if ($result = $conn->query($query)) {
        if ($execute == "false") {
            echo "<br>Tämä tietokantakomento muuttaa yhteensä " . $result->num_rows . " rivin tietoja taulusta " . $table;  
        } else {
            echo "<div class='info-box background-green margin-vertical-20px wrap'>" . mysqli_affected_rows($conn) . " riviä päivitetty onnistuneesti</div>";
        }
    } else {
        echo "<div class='info-box background-red margin-vertical-20px wrap'>Virhe: " . $conn->error . "</div>";
    }

    $conn->close();
?>
