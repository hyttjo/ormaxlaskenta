<?php
    include "mysql.php";

    if ($type == "Tarjous") {
        $sql = "INSERT INTO tarjoukset (pvm, tiili, vari, kattoturva, sadevesi, muoto, kaltevuus, paaty, toimitustapa, asiakasryhma, asiakasnumero, asiakasnimi, viite, nimi, puh, katunimi, katunumero, postinumero, kaupunki, tekija, paivienkesto, laskennankesto)
                VALUES ('" . $date . "'," . 
                       "'" . $tile . "'," . 
                       "'" . $colour . "'," . 
                       "'" . $safetyProducts . "'," . 
                       "'" . $rainwaterProducts . "'," . 
                       "'" . $roofShape . "'," . 
                       "'" . $roofPitch . "'," . 
                       "'" . $vergeSolution . "'," . 
                       "'" . $deliveryMode . "'," . 
                       "'" . $customerGroup . "'," . 
                       "'" . $soldNumber . "'," . 
                       "'" . $soldName . "'," . 
                       "'" . $soldRef . "'," . 
                       "'" . $name . "'," . 
                       "'" . $phone . "'," . 
                       "'" . $street . "'," . 
                       "'" . $streetNo . "'," .
                       "'" . $postalCode . "'," . 
                       "'" . $city . "'," . 
                       "'" . $maker . "'," . 
                       "'" . $days . "'," . 
                       "'" . $calculationTime . "')"; 
    } else {
        $sql = "INSERT INTO tilaukset (pvm, tiili, vari, kattoturva, sadevesi, muoto, kaltevuus, paaty, toimitustapa, asiakasryhma, asiakasnumero, asiakasnimi, viite, nimi, puh, katunimi, katunumero, postinumero, kaupunki)
                VALUES ('" . $date . "'," . 
                       "'" . $tile . "'," . 
                       "'" . $colour . "'," . 
                       "'" . $safetyProducts . "'," . 
                       "'" . $rainwaterProducts . "'," . 
                       "'" . $roofShape . "'," . 
                       "'" . $roofPitch . "'," . 
                       "'" . $vergeSolution . "'," . 
                       "'" . $deliveryMode . "'," . 
                       "'" . $customerGroup . "'," . 
                       "'" . $soldNumber . "'," . 
                       "'" . $soldName . "'," . 
                       "'" . $soldRef . "'," . 
                       "'" . $name . "'," . 
                       "'" . $phone . "'," . 
                       "'" . $street . "'," . 
                       "'" . $streetNo . "'," .  
                       "'" . $postalCode . "'," . 
                       "'" . $city . "')"; 
    }

    if ($conn->query($sql) === TRUE) {
        echo "<div class='pure-button button-success full-width margin-vertical-20px'>Määrälaskenta lisätty tietokantaan onnistuneesti</div>";
    } else {
        echo "<div class='pure-button button-error full-width margin-vertical-20px'>Virhe: " . $conn->error . "</div>";
              //<button class='button-xsmall pure-button'>" . $sql . "</button><br>
    }

    $conn->close();
?>