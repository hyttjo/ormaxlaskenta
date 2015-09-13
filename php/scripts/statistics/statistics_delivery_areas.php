<?php
    include("../mysql.php");

    $table = $_GET["table"];
    $column = $_GET["column"];
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
    
    $color_range = array(200, 20, 0, 250, 250, 250);

    $result_total_count = mysqli_query($conn, "SELECT COUNT(postinumero) FROM $table WHERE (postinumero NOT BETWEEN 00000 AND 00099) $searchSQL $yearsSQL") or die(mysqli_error($conn));
    $total_count_array = mysqli_fetch_array($result_total_count);
    $total_count = $total_count_array[0];
    
    $result_00_10 = get_area_results($conn, $table, '00100', '10999', $total_count, $searchSQL, $yearsSQL, $yearsSQL);
    $result_11_14 = get_area_results($conn, $table, '11000', '14999', $total_count, $searchSQL, $yearsSQL);
    $result_15_19 = get_area_results($conn, $table, '15000', '19999', $total_count, $searchSQL, $yearsSQL);
    $result_20_21099 = get_area_results($conn, $table, '20000', '21099', $total_count, $searchSQL, $yearsSQL);
    $result_22951_27 = get_area_results($conn, $table, '22951', '27999', $total_count, $searchSQL, $yearsSQL);
    $result_20_27 = array($result_20_21099[0] + $result_22951_27[0], $result_20_21099[1] + $result_22951_27[1]);
    $result_22100_22950 = get_area_results($conn, $table, '22100', '22950', $total_count, $searchSQL, $yearsSQL);
    $result_28_29 = get_area_results($conn, $table, '28000', '29999', $total_count, $searchSQL, $yearsSQL);
    $result_30_32 = get_area_results($conn, $table, '30000', '32999', $total_count, $searchSQL, $yearsSQL);
    $result_33_39 = get_area_results($conn, $table, '33000', '39999', $total_count, $searchSQL, $yearsSQL);
    $result_40_44 = get_area_results($conn, $table, '40000', '44999', $total_count, $searchSQL, $yearsSQL);
    $result_45_47 = get_area_results($conn, $table, '45000', '47999', $total_count, $searchSQL, $yearsSQL);
    $result_48_49 = get_area_results($conn, $table, '48000', '49999', $total_count, $searchSQL, $yearsSQL);
    $result_50_52 = get_area_results($conn, $table, '50000', '52999', $total_count, $searchSQL, $yearsSQL);
    $result_53_56 = get_area_results($conn, $table, '53000', '56999', $total_count, $searchSQL, $yearsSQL);
    $result_57_59 = get_area_results($conn, $table, '57000', '59999', $total_count, $searchSQL, $yearsSQL);
    $result_60_64 = get_area_results($conn, $table, '60000', '64999', $total_count, $searchSQL, $yearsSQL);
    $result_65_66 = get_area_results($conn, $table, '65000', '66999', $total_count, $searchSQL, $yearsSQL);
    $result_67_69 = get_area_results($conn, $table, '67000', '69999', $total_count, $searchSQL, $yearsSQL);
    $result_70_75 = get_area_results($conn, $table, '70000', '75999', $total_count, $searchSQL, $yearsSQL);
    $result_76_79 = get_area_results($conn, $table, '76000', '79999', $total_count, $searchSQL, $yearsSQL);
    $result_80_83 = get_area_results($conn, $table, '80000', '83999', $total_count, $searchSQL, $yearsSQL);
    $result_84_86 = get_area_results($conn, $table, '84000', '86999', $total_count, $searchSQL, $yearsSQL);
    $result_87_89 = get_area_results($conn, $table, '87000', '89999', $total_count, $searchSQL, $yearsSQL);
    $result_90_93 = get_area_results($conn, $table, '90000', '93999', $total_count, $searchSQL, $yearsSQL);
    $result_94_95 = get_area_results($conn, $table, '94000', '95999', $total_count, $searchSQL, $yearsSQL);
    $result_96_99 = get_area_results($conn, $table, '96000', '99999', $total_count, $searchSQL, $yearsSQL);

    $area_results = array($result_00_10, 
                          $result_11_14, 
                          $result_15_19, 
                          $result_20_27, 
                          $result_22100_22950,
                          $result_28_29,
                          $result_30_32,
                          $result_33_39,
                          $result_40_44,
                          $result_45_47,
                          $result_48_49,
                          $result_50_52,
                          $result_53_56,
                          $result_57_59,
                          $result_60_64,
                          $result_65_66,
                          $result_67_69,
                          $result_70_75,
                          $result_76_79,
                          $result_80_83,
                          $result_84_86,
                          $result_87_89,
                          $result_90_93,
                          $result_94_95,
                          $result_96_99
                          );

    $min_max_counts = get_min_max_counts($area_results, $total_count);

    function get_area_results($conn, $table, $lowerbound, $upperbound, $total_count, $searchSQL, $yearsSQL) {
        $query = "SELECT COUNT(postinumero) FROM $table WHERE (postinumero BETWEEN $lowerbound AND $upperbound) $searchSQL $yearsSQL";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $area_count = mysqli_fetch_array($result);
        $area_percent = round($area_count[0] / $total_count * 100);

        return array($area_count[0], $area_percent);
    }

    function get_min_max_counts($areas, $total_count) {
        $temp_min = $total_count;
        $temp_max = 0;

        for ($i = 0; $i < count($areas); $i++) {
            if ($areas[$i][0] < $temp_min) {
                $temp_min = $areas[$i][0];
            }
            if ($areas[$i][0] > $temp_max) {
                $temp_max = $areas[$i][0];
            }
        }
        return array($temp_min, $temp_max);
    }
?>