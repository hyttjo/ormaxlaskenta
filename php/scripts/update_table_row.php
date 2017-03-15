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
    $ventilation = $data[7]['ventilation'];
    $shape = $data[8]['shape'];
    $pitch = $data[9]['pitch'];
    $verge = $data[10]['verge'];
    $delivery = $data[11]['delivery'];
    $group = $data[12]['group'];
    $soldnumber = $data[13]['soldnumber'];
    $soldname = $data[14]['soldname'];
    $soldref = $data[15]['soldref'];
    $name = $data[16]['name'];
    $phone = $data[17]['phone'];
    $street = $data[18]['street'];
    $streetno = $data[19]['streetno'];
    $postal = $data[20]['postal'];
    $city = $data[21]['city'];
    $maker = $data[22]['maker'];
    $days = $data[23]['days'];
    $calctime = $data[24]['calctime'];
    $email = $data[25]['email'];
    $contact = $data[26]['contact'];
    $factory = $data[27]['factory'];
    $order = $data[28]['order'];
    $price = $data[29]['price'];
    $deliverydate = $data[30]['deliverydate'];
    $responsibility = $data[31]['responsibility'];
    $emailref = $data[32]['emailref'];

    if ($type == "Tarjous") {
        $sql = "UPDATE tarjoukset SET 
                pvm = '$date', 
                tiili = '$tile', 
                vari = '$colour', 
                kattoturva = '$safety', 
                sadevesi = '$rainwater',
                lapivienti = '$ventilation',  
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
                asiakkaanvastuulla = '$responsibility',
                emailtunnus = '$emailref'
                WHERE id = '$id'"; 
    } else if ($type == "Tilaus") {
        $sql = "UPDATE tilaukset SET 
                pvm = '$date', 
                tiili = '$tile', 
                vari = '$colour', 
                kattoturva = '$safety', 
                sadevesi = '$rainwater',
                lapivienti = '$ventilation', 
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
                emailtunnus = '$emailref'
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
                toimituspvm = '$deliverydate',
                emailtunnus = '$emailref'
                WHERE id = '$id'"; 
    }

    if ($conn->query($sql) === TRUE) {
        echo "<div class='info-box background-green margin-vertical-20px'>ID: '$id' päivitetty onnistuneesti</div>";
    } else {
        echo "<div class='info-box background-red margin-vertical-20px'>Virhe: " . $conn->error . "</div>";
    }

    $conn->close();
?>
