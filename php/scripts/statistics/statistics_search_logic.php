<?php    
    if (isset($_GET["column"]) && isset($_GET["input"]) && $column != '' && $input != '' && $logic == 'is') {
        $searchSQL = "AND ($column = '$input')";
    }
    if ($logic == "not") { 
        $searchSQL = "AND ($column != '$input')";
    }
    if ($logic == "include") {
        $searchSQL = "AND ($column LIKE '%$input%')";
    }
    if ($logic == "null") {
        $searchSQL = "AND ($column IS NULL OR $column = '')";
    }
?>