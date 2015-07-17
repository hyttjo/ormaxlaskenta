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
    } else if ($type == "Tilaus") {
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
    } else {
        $sql = "INSERT INTO lisatarviketarjoukset (pvm, tiili, vari, talotehdas, ostotilausnro, nimi, puh, email, kontaktihenkilo, katunimi, katunumero, postinumero, kaupunki, hinta, toimituspvm)
                VALUES ('" . $date . "'," . 
                       "'" . $tile . "'," . 
                       "'" . $colour . "'," . 
                       "'" . $houseFactory . "'," . 
                       "'" . $orderNumber . "'," . 
                       "'" . $name . "'," . 
                       "'" . $phone . "'," . 
                       "'" . $email . "'," . 
                       "'" . $contactPerson . "'," . 
                       "'" . $street . "'," . 
                       "'" . $streetNo . "'," .
                       "'" . $postalCode . "'," . 
                       "'" . $city . "'," . 
                       "'" . $price . "'," . 
                       "'" . $deliveryDate . "')"; 
    }

    if ($conn->query($sql) === TRUE) {
        echo "<div class='pure-button button-success full-width margin-vertical-20px'>Lisätty tietokantaan onnistuneesti</div>";
    } else {
        echo "<div class='pure-button button-error full-width margin-vertical-20px'>Virhe: " . $conn->error . "</div>";
              //<button class='button-xsmall pure-button'>" . $sql . "</button><br>
    }

    $conn->close();
?>