<?php
    include("mysql.php");
    
    if (isset($_GET['table'])) {
        $table = $_GET['table'];
    }    

    $filename = "$table.csv";

    $result = $conn->query("SELECT * FROM $table");

    $num_fields = mysqli_num_fields($result);
    $headers = array();

    while ($fieldinfo = mysqli_fetch_field($result)) {
        $headers[] = $fieldinfo->name;
    }

    $fp = fopen('php://output', 'w');
    fprintf($fp, chr(0xEF).chr(0xBB).chr(0xBF));

    if ($fp && $result) {
        header("Content-Disposition: attachment; filename='$filename'"); 
        header('Pragma: no-cache');
        header('Content-Type:  text/csv');

        fputcsv($fp, $headers, ";");

        while ($row = $result->fetch_array(MYSQLI_NUM)) {
            fputcsv($fp, array_values($row), ";");
        }
        die;
    }
?>
