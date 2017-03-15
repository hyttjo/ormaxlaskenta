<?php
    include 'mysql.php';
    
    $type = $_POST["type"];

    if ($type == "Tarjous") {
        $table = "tarjoukset";
    } else if ($type == "Lisätarviketarjous") {
        $table = "lisatarviketarjoukset"; 
    } else {
        $table = "tilaukset";
    }
    
    $id = $_POST["id"];

    $query = "SELECT * FROM $table WHERE id = $id";

    $results = $conn->query($query);
        
    while ($row = mysqli_fetch_assoc($results)) {
        echo json_encode($row);
    }
?>
