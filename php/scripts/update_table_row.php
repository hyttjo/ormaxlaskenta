<?php
    include 'mysql.php';
    
    $data = $_POST['json'];
    $id = $data[0]['id'];
    $type = $data[1]['type'];
    $date = $data[2]['date'];
    $tile = $data[3]['tile'];
    $colour = $data[4]['colour'];
    $safety = $data[5]['safety'];
    $rainwater = $data[6]['rainwater'];
    $shape = $data[7]['shape'];
    $pitch = $data[8]['pitch'];
    $verge = $data[9]['verge'];
    $delivery = $data[10]['delivery'];
    $group = $data[11]['group'];
    $soldnumber = $data[12]['soldnumber'];
    $soldname = $data[13]['soldname'];
    $soldref = $data[14]['soldref'];
    $name = $data[15]['name'];
    $phone = $data[16]['phone'];
    $street = $data[17]['street'];
    $streetno = $data[18]['streetno'];
    $postal = $data[19]['postal'];
    $city = $data[20]['city'];
    $maker = $data[21]['maker'];
    $days = $data[22]['days'];
    $calctime = $data[23]['calctime'];
    $email = $data[24]['email'];
    $contact = $data[25]['contact'];
    $factory = $data[26]['factory'];
    $order = $data[27]['order'];
    $price = $data[28]['price'];
    $deliverydate = $data[29]['deliverydate'];
    $responsibility = $data[30]['responsibility'];

    if ($type == "Tarjous") {
        $sql = "UPDATE tarjoukset SET 
                pvm = '$date', 
                tiili = '$tile', 
                vari = '$colour', 
                kattoturva = '$safety', 
                sadevesi = '$rainwater', 
                muoto = '$shape', 
                kaltevuus = '$pitch', 
                paaty = '$verge', 
                toimitustapa = '$delivery', 
                asiakasryhma = '$group', 
                asiakasnumero = '$soldnumber', 
                asiakasnimi = '$soldname', 
                viite = '$soldref', 
                nimi = '$name', 
                puh = '$phone', 
                katunimi = '$street', 
                katunumero = '$streetno', 
                postinumero = '$postal', 
                kaupunki = '$city', 
                tekija = '$maker', 
                paivienkesto = '$days', 
                laskennankesto = '$calctime',
                asiakkaanvastuulla = '$responsibility'
                WHERE id = '$id'"; 
    } else if ($type == "Tilaus") {
        $sql = "UPDATE tilaukset SET 
                pvm = '$date', 
                tiili = '$tile', 
                vari = '$colour', 
                kattoturva = '$safety', 
                sadevesi = '$rainwater', 
                muoto = '$shape', 
                kaltevuus = '$pitch', 
                paaty = '$verge', 
                toimitustapa = '$delivery', 
                asiakasryhma = '$group', 
                asiakasnumero = '$soldnumber', 
                asiakasnimi = '$soldname', 
                viite = '$soldref', 
                nimi = '$name', 
                puh = '$phone', 
                katunimi = '$street', 
                katunumero = '$streetno', 
                postinumero = '$postal', 
                kaupunki = '$city',
                tekija = '$maker', 
                paivienkesto = '$days', 
                laskennankesto = '$calctime'
                WHERE id = '$id'"; 
    } else {
        $sql = "UPDATE lisatarviketarjoukset SET
                pvm = '$date', 
                tiili = '$tile', 
                vari = '$colour', 
                talotehdas = '$factory', 
                ostotilausnro = '$order', 
                nimi = '$name', 
                puh = '$phone', 
                email = '$email', 
                kontaktihenkilo = '$contact', 
                katunimi = '$street', 
                katunumero = '$streetno', 
                postinumero = '$postal', 
                kaupunki = '$city', 
                hinta = '$price', 
                toimituspvm = '$deliverydate'
                WHERE id = '$id'"; 
    }

    if ($conn->query($sql) === TRUE) {
        echo "<div class='pure-button button-success full-width margin-vertical-20px'>ID: '$id' päivitetty onnistuneesti</div>";
    } else {
        echo "<div class='pure-button button-error full-width margin-vertical-20px'>Virhe: " . $conn->error . "</div>";
    }

    $conn->close();
?>
