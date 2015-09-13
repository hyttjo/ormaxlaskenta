<?php
    include("../mysql.php");

    $table = $_GET["table"];
    $column = $_GET["column"];
    $logic = $_GET["logic"];
    $input = $_GET["input"];

    $years = array($_GET["year_0"], $_GET["year_1"], $_GET["year_2"], $_GET["year_3"], $_GET["year_4"], $_GET["year_5"]);
    $years = array_values(array_filter($years));

    include("statistics_search_logic.php");

    for ($i = 0; $i < count($years); $i++) {
        if ($i == 0) { $yearsSQL .= "AND (YEAR(pvm) = '$years[$i]'"; }
        else if ($i == count($years) - 1) { $yearsSQL .= " OR YEAR(pvm) = '$years[$i]')"; } 
        else { $yearsSQL .= " OR YEAR(pvm) = '$years[$i]'"; }
        if (count($years) == 1) { $yearsSQL .= ")"; }
    }
    
    $tiles = array('Ormax',
                   'Protector',
                   'Polar',
                   'Minster',
                   'Turmalin',
                   'Granat',
                   'Vittinge E13',
                   'Vittinge T11',
                   'Nova',
                   'Rubin',
                   'Nortegl',
                   'Hollander',
                   'KDN');

    $colours = array(array('Savitiilenpunainen', 'Enkopoitu Kuparinpunainen', 'Lasitettu Kastanja'),
                     array('Tupapunainen', 'Lasitettu Punainen', 'Lasitettu Koralli'),
                     array('Tummanharmaa'),
                     array('Harmaa', 'Enkopoitu Harmaa', 'Lasitettu Harmaa'),
                     array('Musta', 'Lasitettu Musta'),
                     array('Ruskea', 'Enkopoitu Ruskea'),
                     array('Antiikki'),
                     array('Antrasiitti', 'Enkopoitu Antrasiitti'));

    $tile_colour_results = get_tile_statistics($conn, $table, $tiles, $colours, $searchSQL, $yearsSQL);

    function get_tile_statistics($conn, $table, $tiles, $colours, $searchSQL, $yearsSQL) {
        $tiles_colours = array();

        for ($i = 0; $i < count($tiles); $i++) {
            array_push($tiles_colours, get_tile_colours($conn, $table, $tiles[$i], $colours, $searchSQL, $yearsSQL));
        }
        return $tiles_colours;
    }

    function get_tile_colours($conn, $table, $tile, $colours, $searchSQL, $yearsSQL) {
        $tile_colours = array();

        for ($i = 0; $i < count($colours); $i++) {
            array_push($tile_colours, get_tile_colour_count($conn, $table, $tile, $colours[$i], $searchSQL, $yearsSQL));
        }
        return $tile_colours;
    }

    function get_tile_colour_count($conn, $table, $tile, $colour, $searchSQL, $yearsSQL) {
        if (isset($colour[0]) && isset($colour[1])) {
            $colour0 = $colour[0];
            $colour1 = $colour[1];
            $query = "SELECT COUNT(vari) FROM $table WHERE tiili='$tile' AND (vari='$colour0' OR '$colour1') $searchSQL $yearsSQL";
        } if (isset($colour[0]) && isset($colour[1]) && isset($colour[2])) {
            $colour0 = $colour[0];
            $colour1 = $colour[1];
            $colour2 = $colour[2];
            $query = "SELECT COUNT(vari) FROM $table WHERE tiili='$tile' AND (vari='$colour0' OR '$colour1' OR '$colour2') $searchSQL $yearsSQL";
        } else {
            $colour0 = $colour[0];
            $query = "SELECT COUNT(vari) FROM $table WHERE tiili='$tile' AND vari='$colour0' $searchSQL $yearsSQL"; 
        }
        $result_colour = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $colour_count = mysqli_fetch_array($result_colour);

        return $colour_count[0]; 
    }
?>