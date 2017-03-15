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
                    <li class="active"><a data-toggle="tab" href="#timeline-chart-tab">Aikajana</a></li>
                    <li><a data-toggle="tab" href="#map-chart-tab">Kartta</a></li>
                    <li><a data-toggle="tab" href="#tileandcolour-chart-tab">Tiili / Väri</a></li>
                    <li><a data-toggle="tab" href="#percentages-chart-tab">Prosenttiosuudet</a></li>
                </ul>

                <div class="tab-content">
                    <div id="timeline-chart-tab" class="tab-pane fade in active">
                        <h4>Aikajana</h4>
                        <?php include "charts_filter_selection.php"; ?>
                        <div class="chart-content margin-vertical-20px">
                            <img class="first_chart_image left" src="/img/blank.png" alt="first image"></img>
                            <?php include "charts_year_selection.php"; ?> 
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div id="map-chart-tab" class="tab-pane fade">
                        <h4>Kartta</h4>
                        <?php include "charts_filter_selection.php"; ?>
                        <div class="chart-content margin-vertical-20px">
                            <img class="first_chart_image left" src="/img/blank.png" alt="first image"></img>
                            <img class="second_chart_image left" src="/img/blank.png" alt="second image"></img>
                            <?php include "charts_year_selection_full.php"; ?> 
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div id="tileandcolour-chart-tab" class="tab-pane fade">
                        <h4>Tiili / Väri</h4>
                        <?php include "charts_filter_selection.php"; ?>
                        <div class="chart-content margin-vertical-20px">
                            <img class="first_chart_image left" src="/img/blank.png" alt="first image"></img>
                            <?php include "charts_year_selection_full.php"; ?> 
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div id="percentages-chart-tab" class="tab-pane fade">
                        <h4>Prosenttiosuudet</h4>
                        <?php include "charts_filter_selection.php"; ?>
                        <div class="chart-content margin-vertical-20px">
                            <span>Tarkastelu sarake:</span>
                            <select class="second_column_selection static">
                                <option value="tiili" class="tarjoukset tilaukset lisatarviketarjoukset" selected>Tiili</option>
                                <option value="vari" class="tarjoukset tilaukset lisatarviketarjoukset">Väri</option>
                                <option value="kattoturva" class="tarjoukset tilaukset">Kattoturva</option>
                                <option value="sadevesi" class="tarjoukset tilaukset">Sadevesi</option>
                                <option value="lapivienti" class="tarjoukset tilaukset">Läpivienti</option>
                                <option value="muoto" class="tarjoukset tilaukset">Katon muoto</option>
                                <option value="kaltevuus" class="tarjoukset tilaukset">Katon kaltevuus</option>
                                <option value="paaty" class="tarjoukset tilaukset">Päätymateriaali</option>
                                <option value="toimitustapa" class="tarjoukset tilaukset">Toimitustapa</option>
                                <option value="asiakasryhma" class="tarjoukset tilaukset">Asiakasryhmä</option>
                                <option value="talotehdas" class="lisatarviketarjoukset">Talotehdas</option>
                                <option value="kaupunki" class="tarjoukset tilaukset lisatarviketarjoukset">Kunta</option>
                                <option value="tekija" class="tarjoukset tilaukset">Tekijä</option>
                                <option value="paivienkesto" class="tarjoukset tilaukset">Päivien kesto</option>
                                <option value="laskennankesto" class="tarjoukset tilaukset">Laskennankesto</option>
                                <option value="asiakkaanvastuulla" class="tarjoukset">Määrät as. vastuulla</option>
                            </select>
                            <img class="first_chart_image left" src="/img/blank.png" alt="first image"></img>
                            <?php include "charts_year_selection_full.php"; ?> 
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                
            </div>              
        </div>

        <?php include "info_modal.php"; ?>
    </body>
</html>