<?php
    include 'mysql.php';

    $param = $_GET['term'];
    $table = $_GET['table'];
    $column = $_GET['column'];
    $data = array();

    if ($column == "kaikkikentat") {
        $query = "SELECT * FROM $table ". GetWhereQueryStringAllFields($table, $param) ." ORDER BY id DESC LIMIT 50";   
    } else {
        $query = "SELECT DISTINCT $column FROM $table WHERE $column LIKE '%$param%' ORDER BY id DESC LIMIT 50";   
    }

    $results = $conn->query($query);

    $data = array();
    
    while ($row = $results->fetch_array()) {
        if ($column == "kaikkikentat") {
            for ($i = 0; $i < count($row); $i++) {
                if (stripos($row[$i], $param) !== FALSE) {
                    if (!CheckIfArrayContainsValue($data, $row[$i])) {
                        $data['data'][] = array(
                            'result' => $row[$i]
                        );
                    }     
                }    
            }
        } else {
            $data['data'][] = array(
                'result' => $row[$column]
            ); 
        }
    }
    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Content-type: application/json');

    echo json_encode($data);

    function CheckIfArrayContainsValue($array, $value) {
        $contains = FALSE;
        
        for ($i = 0; $i < count($array["data"]); $i++) {
            if ($array["data"][$i]["result"] == $value) {
                $contains = TRUE;
            }    
        }
        return $contains;
    }

    function GetWhereQueryStringAllFields($table, $param) {
        $quotation_fields = array("pvm", "tiili", "vari", "kattoturva", "sadevesi", "lapivienti", "muoto", "kaltevuus", "paaty", "toimitustapa", "asiakasryhma", "asiakasnumero", "asiakasnimi", "viite", "nimi", "puh", "katunimi", "katunumero", "postinumero", "kaupunki", "tekija", "paivienkesto", "laskennankesto", "asiakkaanvastuulla", "emailtunnus");
        $order_fields = array("pvm", "tiili", "vari", "kattoturva", "sadevesi", "lapivienti", "muoto", "kaltevuus", "paaty", "toimitustapa", "asiakasryhma", "asiakasnumero", "asiakasnimi", "viite", "nimi", "puh", "katunimi", "katunumero", "postinumero", "kaupunki", "tekija", "paivienkesto", "laskennankesto", "emailtunnus");
        $accessories_fields = array("pvm", "tiili", "vari", "talotehdas", "ostotilausnro", "nimi", "puh", "email", "kontaktihenkilo", "katunimi", "katunumero", "postinumero", "kaupunki", "hinta", "toimituspvm", "emailtunnus");
        $address_fields = array("postinumero", "kaupunki");

        if ($table == 'tarjoukset') {
            $fields = $quotation_fields;
        } else if ($table == 'tilaukset') {
            $fields = $order_fields;
        } else if ($table == 'lisatarviketarjoukset') {
            $fields = $accessories_fields;
        } else {
            $fields = $address_fields;
        }
        
        $query_allfields = "";
        
        for ($i = 0; $i < count($fields); $i++) {
            $field = $fields[$i];
            
            if ($i == (count($fields) - 1)) {
                $query_allfields .= "`$field` LIKE '%$param%')";
            } else if ($i == 0) {
                $query_allfields .= "WHERE (`$field` LIKE '%$param%' OR ";
            } else {
                $query_allfields .= "`$field` LIKE '%$param%' OR ";
            }
        }
        return $query_allfields;
    }
?>