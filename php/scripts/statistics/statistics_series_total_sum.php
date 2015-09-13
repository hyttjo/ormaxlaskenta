<?php
    function GetSeriesTotalSum($pChart, $HalfOrFull) {
        $pChartArray = (array) $pChart;
        $totalSum = 0;

        foreach ($pChartArray["Data"]["Series"] as $Key => $Value) { 
            $valueSum = 0;
            if (is_numeric($Value["Data"][0])) {
                for ($i = 0; $i < count($Value["Data"]); $i++) {
                   $valueSum += $Value["Data"][$i];
                }    
            }
            $totalSum += $valueSum; 
        }
        if ($HalfOrFull == "Half") {  $totalSum = $totalSum / 2; }

        return $totalSum;
    }
?>