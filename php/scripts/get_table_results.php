<?php
    include("mysql.php");
   
    $page = 1; // The current page
    $sortname = 'pvm'; // Sort column
    $sortorder = 'desc'; // Sort order
    $qtype = ''; // Search column
    $query = ''; // Search string
    $rp = 20;
    $daterangequery = '';
    $startdate = '';
    $enddate = '';

    $table = 'tarjoukset';

    if (isset($_GET['table'])) {
        $table = $_GET['table'];
    }
    
    // Get posted data
    if (isset($_POST['page'])) {
        $page = $_POST['page'];
    }
    if (isset($_POST['sortname'])) {
        $sortname = $_POST['sortname'];
    }
    if (isset($_POST['sortorder'])) {
        $sortorder = $_POST['sortorder'];
    }
    if (isset($_POST['qtype'])) {
        $qtype = $_POST['qtype'];
    }
    if (isset($_POST['query'])) {
        $query = $_POST['query'];
    }
    if (isset($_POST['rp'])) {
        $rp = $_POST['rp'];
    }

    if (isset($_POST['startdate'])) {
        $startdate = $_POST['startdate'];
    }
    if (isset($_POST['enddate'])) {
        $enddate = $_POST['enddate'];
    }

    // Setup sort and search SQL using posted data
    $sortSql = "ORDER BY $sortname $sortorder";

    $searchSql = ($qtype != '' && $query != '') ? "WHERE `$qtype` LIKE '%$query%'" : '';
    
    if ($qtype == 'kaikkikentat') {
        $searchSql = ($query != '') ? GetQueryStringAllFields($table, $query) : '';
    }

    if ($startdate != '' && $enddate != '') {
        $daterangequery = "pvm BETWEEN '$startdate' AND '$enddate'";
    } else if ($startdate != '' && $enddate =='') {
        $daterangequery = "pvm >= '$startdate'";
    } else if ($enddate != '' && $startdate == '') {
        $daterangequery = "pvm <= '$enddate'";
    }

    if ($searchSql == '' && $startdate != '' || $searchSql == '' && $enddate != '') {
        $searchSql = "WHERE $daterangequery";
    } else if ($searchSql != '' && $startdate != '' || $searchSql != '' && $enddate != '') {
        $searchSql .= " AND $daterangequery";
    }
    
    // Get total count of records
    $sql = "SELECT COUNT(*) FROM $table $searchSql";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $total = $row[0];
    
    // Setup paging SQL
    $pageStart = ($page-1)*$rp;
    $limitSql = "LIMIT $pageStart, $rp";
    
    // Return JSON data
    $data = array();
    $data['page'] = $page;
    $data['total'] = $total;
    $data['rows'] = array();

    $sql = "SELECT * FROM $table $searchSql $sortSql $limitSql";

    $results = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    while ($row = mysqli_fetch_assoc($results)) {
        if ($table == 'tilaukset') {
            $data['rows'][] = array(
                'id' => $row['id'],
                'cell' => array(
                    GetRowInfoButton($row['id']) . $row['id'],
                    $row['pvm'],
                    $row['tiili'],
                    $row['vari'],
                    $row['asiakasryhma'],
                    $row['asiakasnumero'],
                    $row['asiakasnimi'],
                    $row['nimi'],
                    $row['katunimi'],
                    $row['katunumero'],
                    $row['postinumero'],
                    $row['kaupunki'])
            );
        } else if ($table == 'lisatarviketarjoukset') {
            $data['rows'][] = array(
                'id' => $row['id'],
                'cell' => array(
                    GetRowInfoButton($row['id']) . $row['id'],
                    $row['pvm'],
                    $row['tiili'],
                    $row['vari'],
                    $row['talotehdas'],
                    $row['ostotilausnro'],
                    $row['hinta'],
                    $row['nimi'],
                    $row['katunimi'],
                    $row['katunumero'],
                    $row['postinumero'],
                    $row['kaupunki'])
            );
        } else {
            $data['rows'][] = array(
                'id' => $row['id'],
                'cell' => array(
                    GetRowInfoButton($row['id']) . $row['id'],
                    $row['pvm'],
                    $row['tiili'],
                    $row['vari'],
                    $row['asiakasryhma'],
                    $row['asiakasnumero'],
                    $row['asiakasnimi'],
                    $row['nimi'],
                    $row['katunimi'],
                    $row['katunumero'],
                    $row['postinumero'],
                    $row['kaupunki'])
            );
        }
    }

    echo json_encode($data);
    
    function GetQueryStringAllFields($table, $query) {
        $quotation_fields = array("pvm", "tiili", "vari", "kattoturva", "sadevesi", "lapivienti", "muoto", "kaltevuus", "paaty", "toimitustapa", "asiakasryhma", "asiakasnumero", "asiakasnimi", "viite", "nimi", "puh", "katunimi", "katunumero", "postinumero", "kaupunki", "tekija", "paivienkesto", "laskennankesto", "asiakkaanvastuulla", "emailtunnus");
        $order_fields = array("pvm", "tiili", "vari", "kattoturva", "sadevesi", "lapivienti", "muoto", "kaltevuus", "paaty", "toimitustapa", "asiakasryhma", "asiakasnumero", "asiakasnimi", "viite", "nimi", "puh", "katunimi", "katunumero", "postinumero", "kaupunki", "tekija", "paivienkesto", "laskennankesto", "emailtunnus");
        $accessories_fields = array("pvm", "tiili", "vari", "talotehdas", "ostotilausnro", "nimi", "puh", "email", "kontaktihenkilo", "katunimi", "katunumero", "postinumero", "kaupunki", "hinta", "toimituspvm", "emailtunnus");

        if ($table == 'tarjoukset') {
            $fields = $quotation_fields;
        } else if ($table == 'tilaukset') {
            $fields = $order_fields;
        } else {
            $fields = $accessories_fields;
        }
        
        $query_allfields = "";
        
        for ($i = 0; $i < count($fields); $i++) {
            $field = $fields[$i];
            
            if ($i == (count($fields) - 1)) {
                $query_allfields .= "`$field` LIKE '%$query%')";
            } else if ($i == 0) {
                $query_allfields .= "WHERE (`$field` LIKE '%$query%' OR ";
            } else {
                $query_allfields .= "`$field` LIKE '%$query%' OR ";
            }
        }
        return $query_allfields;
    }

    function GetRowInfoButton($id) {
        return '<img class="rowInfo" src="/img/flexigrid/info.png" alt="info" data-id="'. $id .'"/>';
    }
?>