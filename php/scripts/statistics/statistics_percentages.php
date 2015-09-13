<?php
    include("../mysql.php");

    $table = $_GET["table"];
    $column = $_GET["searchcolumn"];
    $compare_column = $_GET["column"];
    $logic = $_GET["logic"];
    $input = $_GET["input"];

    include("statistics_search_logic.php");

    $years = array($_GET["year_0"], $_GET["year_1"], $_GET["year_2"], $_GET["year_3"], $_GET["year_4"], $_GET["year_5"]);
    $years = array_values(array_filter($years));

    for ($i = 0; $i < count($years); $i++) {
        if ($i == 0) { $yearsSQL .= "AND (YEAR(pvm) = '$years[$i]'"; }
        else if ($i == count($years) - 1) { $yearsSQL .= " OR YEAR(pvm) = '$years[$i]')"; } 
        else { $yearsSQL .= " OR YEAR(pvm) = '$years[$i]'"; }
        if (count($years) == 1) { $yearsSQL .= ")"; }
    }

    $query = "SELECT DISTINCT $compare_column FROM $table WHERE ($compare_column IS NOT NULL OR $compare_column != '') $searchSQL $yearsSQL";
    $result_distinct = $conn->query($query);

    if ($conn->error) { printf("Errormessage: %s\n", $conn->error); }    

    while($row = $result_distinct->fetch_array()) {
        $distinct_array[] = $row[$compare_column];   
    }

    $distinct_array = array_values(array_filter($distinct_array));

    for ($i = 0; $i < count($distinct_array); $i++) {
        $query = "SELECT COUNT($compare_column) FROM $table WHERE ($compare_column = '$distinct_array[$i]') $searchSQL $yearsSQL";
        $result_distinct_count = $conn->query($query);

        if ($conn->error) { printf("Errormessage: %s\n", $conn->error); }    

        $distinct_count_array = $result_distinct_count->fetch_array();
        $distinct_count = $distinct_count_array[0];

        $distinct_array_counts[$i] = $distinct_count;
    }
?>