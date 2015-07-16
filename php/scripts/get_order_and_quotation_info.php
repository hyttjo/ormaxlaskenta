<?php
    include 'mysql.php';
    
    $type = $_POST["type"];

    if ($type == "Tarjous") {
        $table = "tarjoukset";
    } else {
        $table = "tilaukset";
    }
    
    $id = $_POST["id"];

    $query = "SELECT * FROM $table WHERE id = $id";

    $results = $conn->query($query);
        
    while ($row = mysqli_fetch_assoc($results)) {
        echo json_encode($row);
        /*
        $data = array(
            'id' => $row['id'],
            'date' => $row['pvm'],
            'tile' => $row['tiili'],
            'colour' => $row['vari'],
            'safetyProducts' => $row['kattoturva'],
            'rainwaterProducts' => $row['sadevesi'],
            'roofShape' => $row['muoto'],
            'roofPitch' => $row['kaltevuus'],
            'vergeSolution' => $row['paaty'],
            'deliveryMode' => $row['toimitustapa'],
            'customerGroup' => $row['asiakasryhma'],
            'soldNumber' => $row['asiakasnumero'],
            'soldName' => $row['asiakasnimi'],
            'soldRef' => $row['viite'],
            'name' => $row['nimi'],
            'phone' => $row['puh'],
            'street' => $row['katunimi'],
            'streetNo' => $row['katunumero'],
            'postalCode' => $row['postinumero'],
            'city' => $row['kaupunki'],
            'maker' => $row['tekija'],
            'days' => $row['paivienkesto'],
            'calculationTime' => $row['laskennankesto']
        );*/
    }
?>
