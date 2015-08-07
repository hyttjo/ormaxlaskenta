<?php
    include("../mysql.php");

    $table = $_GET["table"];

    $column = $_GET["column"];
    $logic = $_GET["logic"];
    $input = $_GET["input"];

    if (isset($_GET["column"]) && isset($_GET["input"]) && $column != '' && $input != '' && $logic == 'is') {
        $searchSQL = "AND ($column = '$input')";
    }

    if ($logic == "not") $searchSQL = "AND ($column != '$input')";
    if ($logic == "include") $searchSQL = "AND ($column LIKE '%$input%')";
    if ($logic == "null") $searchSQL = "AND ($column IS NULL OR $column = '')";
    
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
                     array('Antrasiitti', 'Enkopoitu Antrasiitti'),
                     array(''));

    $tile_colour_results = get_tile_statistics($conn, $table, $tiles, $colours, $searchSQL);

    function get_tile_statistics($conn, $table, $tiles, $colours, $searchSQL) {
        $tiles_colours = array();

        for ($i = 0; $i < count($tiles); $i++) {
            array_push($tiles_colours, get_tile_colours($conn, $table, $tiles[$i], $colours, $searchSQL));
        }
        return $tiles_colours;
    }

    function get_tile_colours($conn, $table, $tile, $colours, $searchSQL) {
        $tile_colours = array();

        for ($i = 0; $i < count($colours); $i++) {
            array_push($tile_colours, get_tile_colour_count($conn, $table, $tile, $colours[$i], $searchSQL));
        }
        return $tile_colours;
    }

    function get_tile_colour_count($conn, $table, $tile, $colour, $searchSQL) {
        if (isset($colour[0]) && isset($colour[1])) {
            $colour0 = $colour[0];
            $colour1 = $colour[1];
            $query = "SELECT COUNT(vari) FROM $table WHERE tiili='$tile' AND (vari='$colour0' OR '$colour1') $searchSQL";
        } if (isset($colour[0]) && isset($colour[1]) && isset($colour[2])) {
            $colour0 = $colour[0];
            $colour1 = $colour[1];
            $colour2 = $colour[2];
            $query = "SELECT COUNT(vari) FROM $table WHERE tiili='$tile' AND (vari='$colour0' OR '$colour1' OR '$colour2') $searchSQL";
        } else {
            $colour0 = $colour[0];
            $query = "SELECT COUNT(vari) FROM $table WHERE tiili='$tile' AND vari='$colour0' $searchSQL"; 
        }
        $result_colour = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $colour_count = mysqli_fetch_array($result_colour);

        return $colour_count[0]; 
    }
?>