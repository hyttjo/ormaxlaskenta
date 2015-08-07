<?php
    $page = "charts";    
?>

<!DOCTYPE html>
<html lang="fi">
    <head>
        <?php include "head.php"; ?>
    </head>
    <body>
        <div class="div-container centered background-logo">
            <?php include "menu.php"; ?>
            <div class="content-area full-width background-darkgradient">
            
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#map-chart-tab">Kartta</a></li>
                    <li><a data-toggle="tab" href="#timeline-chart-tab">Aikajana</a></li>
                    <li><a data-toggle="tab" href="#tileandcolour-chart-tab">Tiili / Väri</a></li>
                </ul>

                <div class="tab-content">
                    <div id="map-chart-tab" class="tab-pane fade in active">
                        <h4>Kartta</h4>
                        <?php include "charts_filter_selection.php"; ?>
                        <img class="first_chart_image" src="/img/blank.png" alt="first image"></img>
                        <img class="second_chart_image" src="/img/blank.png" alt="second image"></img>
                    </div>
                    <div id="timeline-chart-tab" class="tab-pane fade">
                        <h4>Aikajana</h4>
                        <?php include "charts_filter_selection.php"; ?>
                        <img class="first_chart_image" src="/img/blank.png" alt="first image"></img>
                    </div>
                    <div id="tileandcolour-chart-tab" class="tab-pane fade">
                        <h4>Tiili / Väri</h4>
                        <?php include "charts_filter_selection.php";  ?>
                        <img class="first_chart_image" src="/img/blank.png" alt="first image"></img>
                    </div>
                </div>
                
            </div>              
        </div>

        <?php include "info_modal.php"; ?>
    </body>
</html>