<?php
    include "mysql.php";

    if ($roofPitch == "") $roofPitch = '0';
    if ($days == "") $days = '0';
    if ($calculationTime == "") $calculationTime = '0';
    if ($price == "") $price = '0';
    if ($deliveryDate == "") $deliveryDate = '0000-00-00';
    $query = "SELECT * FROM ";

    if ($type == "Tarjous") {
        $query .= "tarjoukset ";
        $sql = "INSERT INTO tarjoukset (pvm, tiili, vari, kattoturva, sadevesi, lapivienti, muoto, kaltevuus, paaty, toimitustapa, asiakasryhma, asiakasnumero, asiakasnimi, viite, nimi, puh, katunimi, katunumero, postinumero, kaupunki, tekija, paivienkesto, laskennankesto, asiakkaanvastuulla, emailtunnus)
                VALUES ('" . $date . "'," . 
                       "'" . $tile . "'," . 
                       "'" . $colour . "'," . 
                       "'" . $safetyProducts . "'," . 
                       "'" . $rainwaterProducts . "'," .
                       "'" . $ventilationProducts . "'," . 
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
                       "'" . $responsibility . "'," . 
                       "'" . $emailRef . "')";
    } else if ($type == "Tilaus") {
        $query .= "tilaukset ";
        $sql = "INSERT INTO tilaukset (pvm, tiili, vari, kattoturva, sadevesi, lapivienti, muoto, kaltevuus, paaty, toimitustapa, asiakasryhma, asiakasnumero, asiakasnimi, viite, nimi, puh, katunimi, katunumero, postinumero, kaupunki, tekija, paivienkesto, laskennankesto, emailtunnus)
                VALUES ('" . $date . "'," . 
                       "'" . $tile . "'," . 
                       "'" . $colour . "'," . 
                       "'" . $safetyProducts . "'," . 
                       "'" . $rainwaterProducts . "'," .
                       "'" . $ventilationProducts . "'," .  
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
                       "'" . $emailRef . "')";
    } else {
        $query .= "lisatarviketarjoukset ";
        $sql = "INSERT INTO lisatarviketarjoukset (pvm, tiili, vari, talotehdas, ostotilausnro, nimi, puh, email, kontaktihenkilo, katunimi, katunumero, postinumero, kaupunki, hinta, toimituspvm, emailtunnus)
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
                       "'" . $deliveryDate . "'," . 
                       "'" . $emailRef . "')";
    }
    $query .= "WHERE pvm = '$date'";
    $num_rows = $conn->query($query)->num_rows;
    
    if ($num_rows == 0) {
        if ($conn->query($sql) === TRUE) {
            echo "<div class='info-box background-green margin-vertical-20px'>Lisätty tietokantaan onnistuneesti</div>";
        } else {
            echo "<div class='info-box background-red margin-vertical-20px'>Virhe: " . $conn->error . "</div>";
        }
    } else {
        echo "<div class='info-box background-red margin-vertical-20px'>Virhe: Tietokanta sisältää jo tämän laskennan.</div>";
    }

    $conn->close();
?>