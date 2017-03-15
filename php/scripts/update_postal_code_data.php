<?php
    include 'mysql.php';

    $table = $_GET["table"];

    $query = "SELECT * FROM $table WHERE (kaupunki IS NOT NULL OR kaupunki != '') AND (postinumero IS NULL OR postinumero = '')";
    $results = $conn->query($query);

    $count = 0;
    if ($conn->error) { 
        printf("Errormessage: %s\n", $conn->error); 
    } else {
        while($row = $results->fetch_array()) {
            $id = $row["id"];
            $city = $row["kaupunki"];
            
            $query = "SELECT postinumero FROM osoitteisto WHERE kaupunki = '$city' LIMIT 1";
            $postal_code_result = $conn->query($query);
            
            if ($conn->error) { 
                printf("Errormessage: %s\n", $conn->error); 
            } else {
                while($postal_row = $postal_code_result->fetch_array()) {
                    $postal_code = $postal_row["postinumero"];
                    
                    $query = "UPDATE $table SET postinumero = '$postal_code' WHERE id = '$id'";
                    $conn->query($query);

                    if ($conn->error) { 
                        printf("Errormessage: %s\n", $conn->error); 
                    } else {
                        $count++;
                        printf("Update completed: $count <br>");
                    } 
                }
            }
        }
    }
?>
