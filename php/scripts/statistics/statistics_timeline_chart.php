<?php
    //include("statistics_timeline.php");   
    
    include("../mysql.php");

    include("pChart/class/pData.class.php");
    include("pChart/class/pDraw.class.php");
    include("pChart/class/pImage.class.php");

    $table = $_GET["table"];
    $column = $_GET["column"];
    $logic = $_GET["logic"];
    $input = $_GET["input"];

    $years = array($_GET["year_0"], $_GET["year_1"], $_GET["year_2"], $_GET["year_3"], $_GET["year_4"], $_GET["year_5"]);
    $years = array_values(array_filter($years));

    if (isset($_GET["column"]) && isset($_GET["input"]) && $column != '' && $input != '' && $logic == 'is') {
        $searchSQL = "AND ($column = '$input')";
    }

    if ($logic == "not") $searchSQL = "AND ($column != '$input')";
    if ($logic == "include") $searchSQL = "AND ($column LIKE '%$input%')";
    if ($logic == "null") $searchSQL = "AND ($column IS NULL OR $column = '')";
   
    $results = array();

    for ($i = 0; $i < count($years); $i++) {
        $query = "SELECT MONTHNAME(pvm) AS month, COUNT(*) AS count FROM $table WHERE YEAR(pvm) = '$years[$i]' $searchSQL GROUP BY MONTH(pvm)";
        $month_totals = $conn->query($query);
        
        if ($conn->error) { printf("Errormessage: %s\n", $conn->error); }    

        $data = array("January" => 0, 
                      "February" => 0, 
                      "March" => 0, 
                      "April" => 0, 
                      "May" => 0, 
                      "June" => 0, 
                      "July" => 0, 
                      "August" => 0, 
                      "September" => 0, 
                      "October" => 0, 
                      "November" => 0, 
                      "December" => 0);

        while($row = $month_totals->fetch_array()) {
            $data = array_merge($data, array($row['month'] => $row['count']));
        }
        
        $results[$i] = array($years[$i] => $data); 
    }

    $width = 760;
    $height = 480;

    $pChart = new pData();

    $line_colours = array("0" => array("R"=>234,"G"=>66,"B"=>91,"Alpha"=>100),
                          "1" => array("R"=>87,"G"=>220,"B"=>80,"Alpha"=>100),
                          "2" => array("R"=>80,"G"=>112,"B"=>220,"Alpha"=>100),
                          "3" => array("R"=>217,"G"=>71,"B"=>228,"Alpha"=>100),
                          "4" => array("R"=>246,"G"=>113,"B"=>53,"Alpha"=>100),
                          "5" => array("R"=>233,"G"=>224,"B"=>67,"Alpha"=>100));
    
    for ($i = 0; $i < count($results); $i++) {
        foreach($results[$i] as $year => $month_results) {
            $pChart->addPoints(array($month_results['January'],
                                     $month_results['February'],
                                     $month_results['March'],
                                     $month_results['April'],
                                     $month_results['May'],
                                     $month_results['June'],
                                     $month_results['July'],
                                     $month_results['August'],
                                     $month_results['September'],
                                     $month_results['October'],
                                     $month_results['November'],
                                     $month_results['December']),"Serie$i");
            $pChart->setSerieDescription("Serie$i",$year);
            $pChart->setSerieOnAxis("Serie$i",0);
            $pChart->setPalette("Serie$i", $line_colours[$i]);
            $pChart->setSerieWeight("Serie$i",0.75);
        }
    }

    $pChart->addPoints(array("Tammi", "Helmi", "Maalis", "Huhti", "Touko", "Kesä", "Heinä", "Elo", "Syys", "Loka", "Marras", "Joulu"),"Absissa");
    $pChart->setAbscissa("Absissa");

    $pChart->setAxisPosition(0,AXIS_POSITION_LEFT);
    $pChart->setAxisName(0,"Laskentamäärä / vuosi");
    $pChart->setAxisUnit(0,"");

    $pChartPicture = new pImage($width,$height,$pChart);
    $Settings = array("R"=>255, "G"=>255, "B"=>255);
    $pChartPicture->drawFilledRectangle(0,0,$width,$height,$Settings);

    $pChartPicture->setFontProperties(array("FontName"=>"pChart/fonts/arial.ttf","FontSize"=>14));
    $TextSettings = array("Align"=>TEXT_ALIGN_BOTTOMMIDDLE, "R"=>0, "G"=>0, "B"=>0);
    $pChartPicture->drawText($width / 2,25,ucfirst($table)." - Aikajana", $TextSettings);

    $pChartPicture->setGraphArea(50,35,$width - 25,$height - 75);
    $pChartPicture->setFontProperties(array("R"=>0,"G"=>0,"B"=>0,"FontName"=>"pChart/fonts/arial.ttf","FontSize"=>10));

    $Settings = array("Pos"=>SCALE_POS_LEFTRIGHT, "Mode"=>SCALE_MODE_FLOATING, "LabelingMethod"=>LABELING_DIFFERENT, 
    "GridR"=>240, "GridG"=>240, "GridB"=>240, "GridAlpha"=>50, 
    "TickR"=>0, "TickG"=>0, "TickB"=>0, "TickAlpha"=>50, 
    "LabelRotation"=>0, "CycleBackground"=>1, "DrawXLines"=>1, "DrawSubTicks"=>1, 
    "SubTickR"=>255, "SubTickG"=>0, "SubTickB"=>0, "SubTickAlpha"=>50, "DrawYLines"=>ALL);

    $pChartPicture->drawScale($Settings);

    $Config = array("DisplayValues"=>1, "AroundZero"=>1, "Gradient"=>1, "Surrounding"=>-15, "InnerSurrounding"=>15);

    $pChartPicture->drawLineChart($Config);

    $Config = array("FontR"=>0, "FontG"=>0, "FontB"=>0, "FontName"=>"pChart/fonts/arial.ttf", "FontSize"=>10, 
    "Margin"=>40, "Alpha"=>30, "BoxWidth"=>10, "BoxHeight"=>10, "Style"=>LEGEND_NOBORDER, "Mode"=>LEGEND_HORIZONTAL);

    $pChartPicture->drawLegend(40, $height - 40, $Config);

    $pChartPicture->autoOutput($table.".png");
?>