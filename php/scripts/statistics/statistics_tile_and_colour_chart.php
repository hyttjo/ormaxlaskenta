<?php
    include("statistics_tile_and_colour.php");
    include("statistics_series_total_sum.php"); 
    include("statistics_description_years.php");   

    include("pChart/class/pData.class.php");
    include("pChart/class/pDraw.class.php");
    include("pChart/class/pImage.class.php");

    include("statistics_description_text.php");

    $width = 760;
    $height = 500;

    $pChart = new pData();

    $chart_tile_colours = array("0" => array("R"=>246,"G"=>113,"B"=>53,"Alpha"=>100),
                                "1" => array("R"=>211,"G"=>60,"B"=>29,"Alpha"=>100),
                                "2" => array("R"=>80,"G"=>94,"B"=>97,"Alpha"=>100),
                                "3" => array("R"=>131,"G"=>137,"B"=>129,"Alpha"=>100),
                                "4" => array("R"=>42,"G"=>43,"B"=>45,"Alpha"=>100),
                                "5" => array("R"=>116,"G"=>82,"B"=>73,"Alpha"=>100),
                                "6" => array("R"=>190,"G"=>93,"B"=>72,"Alpha"=>100),
                                "7" => array("R"=>95,"G"=>83,"B"=>84,"Alpha"=>100),
                                "8" => array("R"=>220,"G"=>220,"B"=>220,"Alpha"=>100));
    
    for ($i = 0; $i < count($colours); $i++) {
        $pChart->addPoints(array($tile_colour_results[0][$i],
                                 $tile_colour_results[1][$i],
                                 $tile_colour_results[2][$i],
                                 $tile_colour_results[3][$i],
                                 $tile_colour_results[4][$i],
                                 $tile_colour_results[5][$i],
                                 $tile_colour_results[6][$i],
                                 $tile_colour_results[7][$i],
                                 $tile_colour_results[8][$i],
                                 $tile_colour_results[9][$i],
                                 $tile_colour_results[10][$i],
                                 $tile_colour_results[11][$i],
                                 $tile_colour_results[12][$i]),"Serie$i");
        $pChart->setSerieDescription("Serie$i", $colours[$i][0]);
        $pChart->setSerieOnAxis("Serie$i",0);
        $pChart->setPalette("Serie$i", $chart_tile_colours[$i]);    
    }
 
    $pChart->addPoints(array(get_tile_total_count($tile_colour_results, 0),
                             get_tile_total_count($tile_colour_results, 1),
                             get_tile_total_count($tile_colour_results, 2),
                             get_tile_total_count($tile_colour_results, 3),
                             get_tile_total_count($tile_colour_results, 4),
                             get_tile_total_count($tile_colour_results, 5),
                             get_tile_total_count($tile_colour_results, 6),
                             get_tile_total_count($tile_colour_results, 7),
                             get_tile_total_count($tile_colour_results, 8),
                             get_tile_total_count($tile_colour_results, 9),
                             get_tile_total_count($tile_colour_results, 10),
                             get_tile_total_count($tile_colour_results, 11),
                             get_tile_total_count($tile_colour_results, 12)),"Serie10");
    $pChart->setSerieDrawable("Serie10", FALSE);
    $pChart->setPalette("Serie10", array("Alpha"=>0));

    $pChart->addPoints(array("Ormax", "Protector", "Polar", "Minster", "Turmalin", "Granat", "E13", "T11", "Nova", "Rubin", "Nortegl", "Hollander", "KDN"),"Absissa");
    $pChart->setAbscissa("Absissa");

    $pChart->setAxisPosition(0,AXIS_POSITION_LEFT);
    $pChart->setAxisName(0,"Laskentamäärät kpl");
    $pChart->setAxisUnit(0,"");

    $pChartPicture = new pImage($width,$height,$pChart);
    $Settings = array("R"=>255, "G"=>255, "B"=>255);
    $pChartPicture->drawFilledRectangle(0,0,$width,$height,$Settings);

    $pChartPicture->setFontProperties(array("FontName"=>"pChart/fonts/arial.ttf","FontSize"=>14));
    $TextSettings = array("Align"=>TEXT_ALIGN_BOTTOMMIDDLE, "R"=>0, "G"=>0, "B"=>0);
    $pChartPicture->drawText($width / 2,25,ucfirst($table)." - Tiilet / Värit", $TextSettings);

    $description .= GetYearsDescription($years);
    $description .= " - (". GetSeriesTotalSum($pChart, "Half") ."kpl)";

    if (strlen($description) > 120) {
        $description = substr($description, strpos($description, "joissa"));
    }

    $pChartPicture->setFontProperties(array("FontSize"=>11));
    $pChartPicture->drawText($width / 2,45, $description, $TextSettings);

    $pChartPicture->setGraphArea(50,55,$width - 25,$height - 75);
    $pChartPicture->setFontProperties(array("R"=>0,"G"=>0,"B"=>0,"FontName"=>"pChart/fonts/arial.ttf","FontSize"=>10));

    $Settings = array("Pos"=>SCALE_POS_LEFTRIGHT, "Mode"=>SCALE_MODE_ADDALL_START0, "LabelingMethod"=>LABELING_DIFFERENT, 
    "GridR"=>240, "GridG"=>240, "GridB"=>240, "GridAlpha"=>50, 
    "TickR"=>0, "TickG"=>0, "TickB"=>0, "TickAlpha"=>50, 
    "LabelRotation"=>0, "CycleBackground"=>1, "DrawXLines"=>1, "DrawSubTicks"=>1, 
    "SubTickR"=>255, "SubTickG"=>0, "SubTickB"=>0, "SubTickAlpha"=>50, "DrawYLines"=>ALL);

    $pChartPicture->drawScale($Settings);

    $Config = array("DisplayValues"=>1, "AroundZero"=>1, "Gradient"=>1, "Surrounding"=>-15, "InnerSurrounding"=>15);

    $pChartPicture->drawStackedBarChart($Config);

    $Config = array("FontR"=>0, "FontG"=>0, "FontB"=>0, "FontName"=>"pChart/fonts/arial.ttf", "FontSize"=>10, 
    "Margin"=>40, "Alpha"=>30, "BoxWidth"=>10, "BoxHeight"=>10, "Style"=>LEGEND_NOBORDER, "Mode"=>LEGEND_HORIZONTAL);

    $pChartPicture->drawLegend(50, $height - 40, $Config);

    $pChart->setSerieDrawable('Serie10', TRUE);

    for ($i = 0; $i < count($colours); $i++) {
        $pChart->setSerieDrawable("Serie$i", FALSE);
    }

    $pChartPicture->setGraphArea(50, 50, $width - 25, $height - 80);
    $pChartPicture->setFontProperties(array("R"=>0,"G"=>0,"B"=>0,"FontName"=>"pChart/fonts/arialbd.ttf","FontSize"=>10));
    $pChartPicture->drawBarChart(array("DisplayValues" => TRUE, "DisplayColor"=>array('R'=>0, 'G'=>0, 'B'=>0)));

    $pChartPicture->autoOutput($table.".png");

    function get_tile_total_count($tile_colour_results, $tile) {
        $tile_total = 0;

        for ($i = 0; $i < count($tile_colour_results[$tile]); $i++) {
            $tile_total += $tile_colour_results[$tile][$i];
        }
        return $tile_total;
    }
?>