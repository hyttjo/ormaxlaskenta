<?php
    include "mysql.php";

    if ($roofPitch == "") $roofPitch = '0';
    if ($days == "") $days = '0';
    if ($calculationTime == "") $calculationTime = '0';
    if ($price == "") $price = '0';
    if ($deliveryDate == "") $deliveryDate = '0000-00-00';

    if ($type == "Tarjous") {
        $sql = "INSERT INTO tarjoukset (pvm, tiili, vari, kattoturva, sadevesi, muoto, kaltevuus, paaty, toimitustapa, asiakasryhma, asiakasnumero, asiakasnimi, viite, nimi, puh, katunimi, katunumero, postinumero, kaupunki, tekija, paivienkesto, laskennankesto, asiakkaanvastuulla)
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
                       "'" . $calculationTime . "'," . 
                       "'" . $responsibility . "')"; 
    } else if ($type == "Tilaus") {
        $sql = "INSERT INTO tilaukset (pvm, tiili, vari, kattoturva, sadevesi, muoto, kaltevuus, paaty, toimitustapa, asiakasryhma, asiakasnumero, asiakasnimi, viite, nimi, puh, katunimi, katunumero, postinumero, kaupunki, tekija, paivienkesto, laskennankesto)
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
        echo "<div class='info-box background-green margin-vertical-20px'>Lisätty tietokantaan onnistuneesti</div>";
    } else {
        echo "<div class='info-box background-red margin-vertical-20px'>Virhe: " . $conn->error . "</div>";
    }

    $conn->close();
?>