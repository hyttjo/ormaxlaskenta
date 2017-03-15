<?php
    include 'mysql.php';
    
    $execute = $_POST["execute"];
    $table = $_POST["table"];
    $first_column = $_POST["first_column"];
    $logic = $_POST["logic"];
    $first_input = $_POST["first_input"];
    $second_column = $_POST["second_column"];
    $second_input = $_POST["second_input"];

    $where = '';

    if ($logic == "is") $where = "WHERE $first_column = '$first_input'";
    if ($logic == "not") $where = "WHERE $first_column != '$first_input'";
    if ($logic == "include") $where = "WHERE $first_column LIKE '%$first_input%'";
    if ($logic == "null") $where = "WHERE $first_column IS NULL OR $first_column = ''";

    $set = "SET $second_column = '$second_input'";

    if ($second_input == "NULL") $set = "SET $second_column = NULL";

    $query = "UPDATE $table $set $where";
    
    echo $query;
    
    if ($execute == "false") {
        $query = "SELECT * FROM $table $where";
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
