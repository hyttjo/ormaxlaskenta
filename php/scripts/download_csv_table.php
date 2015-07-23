<?php
    include("mysql.php");
    
    if (isset($_GET['table'])) {
        $table = $_GET['table'];
    }    

    $filename = "$table.csv"; 
    $filepath = "/tmp/$filename";
    
    ob_start('ob_gzhandler');
    header('Content-type: application/octet-stream');
    header("Content-Disposition: attachment; filename='$filename'");

    $sql = "GRANT FILE ON *.* TO 'ormaxlaskenta'@'mysql1.gear.host'";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $sql = "SELECT * INTO OUTFILE '$filepath' FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"' LINES TERMINATED BY '\n' FROM $table";
    $result_csv = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    readfile($result_csv);
?>
