<?php
    include("statistics_percentages.php");
    include("statistics_series_total_sum.php");

    include("pChart/class/pData.class.php");
    include("pChart/class/pDraw.class.php");
    include("pChart/class/pImage.class.php");
    include("pChart/class/pPie.class.php"); 

    include("statistics_description_text.php");

    $width = 760;
    $height = 500;

    $pChart = new pData();    
    $pChartPicture = new pImage($width, $height, $pChart); 

    $Settings = array("R"=>255, "G"=>255, "B"=>255); 
    $pChartPicture->drawFilledRectangle(0, 0, $width, $height, $Settings);

    DrawPieChart($pChart, $pChartPicture, $width / 2 - 50, $height / 2 + 30, $compare_column, $distinct_array_counts, $distinct_array);

    $headerText = array("Align"=>TEXT_ALIGN_BOTTOMMIDDLE, "FontName"=>"pChart/fonts/arial.ttf", "FontSize"=>14, "R"=>80,"G"=>80,"B"=>80); 
    $pChartPicture->drawText($width / 2, 25, ucfirst($table)." - Prosenttiosuudet", $headerText);

    $description .= GetYearsDescription($years);
    $description .= " - (". GetSeriesTotalSum($pChart) ." kpl)";

    if (strlen($description) > 120) {
        $description = substr($description, strpos($description, "joissa"));
    }

    $textSettings = array("Align"=>TEXT_ALIGN_BOTTOMMIDDLE, "FontSize"=>11);
    $pChartPicture->drawText($width / 2, 45, $description, $textSettings);

    $pChartPicture->autoOutput("$table.png"); 

    function DrawPieChart($pChart, $pChartPicture, $x, $y, $name, $values, $labels) {
        $pChart->removeSerie("Serie");
        $pChart->removeSerie("Labels");

        $pChart->addPoints($values, "Serie");   
        $pChart->setSerieDescription("Serie", ""); 

        $pChart->addPoints($labels, "Labels"); 
        $pChart->setAbscissa("Labels"); 
        
        $text = array("Align"=>TEXT_ALIGN_BOTTOMMIDDLE, "FontName"=>"pChart/fonts/arial.ttf", "FontSize"=>10, "R"=>80,"G"=>80,"B"=>80);
        $pChartPicture->setFontProperties($text); 
        $pChartPicture->setShadow(TRUE, array("X"=>2, "Y"=>2, "R"=>0, "G"=>0, "B"=>0, "Alpha"=>50)); 

        $PieChart = new pPie($pChartPicture, $pChart); 

        $PieChart->draw2DPie($x, $y, array("Radius"=>150, "ValuePosition"=>PIE_VALUE_INSIDE, "WriteValues"=>PIE_VALUE_PERCENTAGE, "ValueR"=>80,"ValueG"=>80,"ValueB"=>80, "LabelStacked"=>TRUE, "DrawLabels"=>TRUE,"Border"=>TRUE)); 
        $pChartPicture->setShadow(FALSE);
        
        $nameText = array("Align"=>TEXT_ALIGN_BOTTOMMIDDLE, "FontName"=>"pChart/fonts/arialbd.ttf", "FontSize"=>11, "R"=>80,"G"=>80,"B"=>80);
        $pChartPicture->drawText($x, $y - 200, ucfirst($name), $nameText);
       
        $PieChart->drawPieLegend($x + 250, $y - 150, array("Alpha"=>20, "BoxSize"=>10)); 
    }
?>