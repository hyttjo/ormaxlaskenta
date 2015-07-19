<?php
    $type = isset($_GET["type"]) ? $_GET["type"] : "";
    $date = isset($_GET["date"]) ? $_GET["date"] : "";
    $tile = isset($_GET["tile"]) ? $_GET["tile"] : "";
    $colour = isset($_GET["colour"]) ? $_GET["colour"] : "";
    $safetyProducts = isset($_GET["safety"]) ? $_GET["safety"] : "";
    $rainwaterProducts = isset($_GET["rainwater"]) ? $_GET["rainwater"] : "";
    $roofShape = isset($_GET["shape"]) ? $_GET["shape"] : "";
    $roofPitch = isset($_GET["pitch"]) ? $_GET["pitch"] : "";
    $roofPitch = ($roofPitch == "") ? "0" : $roofPitch;
    $vergeSolution = isset($_GET["verge"]) ? $_GET["verge"] : "";
    $deliveryMode = isset($_GET["delivery"]) ? $_GET["delivery"] : "";
    $customerGroup = isset($_GET["group"]) ? $_GET["group"] : "";
    $soldNumber = isset($_GET["soldnumber"]) ? $_GET["soldnumber"] : "";
    $soldName = isset($_GET["soldname"]) ? $_GET["soldname"] : "";
    $soldRef = isset($_GET["soldref"]) ? $_GET["soldref"] : "";
    $name = isset($_GET["name"]) ? $_GET["name"] : "";
    $phone = isset($_GET["phone"]) ? $_GET["phone"] : "";
    $street = isset($_GET["street"]) ? $_GET["street"] : "";
    $streetNo = isset($_GET["streetno"]) ? $_GET["streetno"] : "";
    $postalCode = isset($_GET["postal"]) ? $_GET["postal"] : "";
    $city = isset($_GET["city"]) ? $_GET["city"] : "";
    $maker = isset($_GET["maker"]) ? $_GET["maker"] : "";
    $days = isset($_GET["days"]) ? $_GET["days"] : "";
    $calculationTime = isset($_GET["calctime"]) ? $_GET["calctime"] : "";   
?>
        <form id="info-form" autocomplete="on">
            <table id="info-table" class="pure-table table-condensed full-width centered border" data-id="" data-table="">
                <thead>
                    <tr>
                        <th colspan="8" id="table-header">Ormax - RoofCalculator-määrälaskenta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2" class="table-subheader noborder-left">Laskennantiedot</td>
                        <td colspan="2" class="table-subheader">Toimitus / Asiakas</td></td>
                        <td colspan="2" class="table-subheader">Jälleenmyyjä</td>
                        <td colspan="2" class="table-subheader noborder-right">Laskennan teko</td>
                    </tr>
                    <tr>
                        <td class="table-label">Laskennan tyyppi:</td>
                        <td id="table-type" class="table-value">
                            <?php echo $type ?>
                        </td>
                        <td class="table-label">Nimi:</td>
                        <td id="table-name" class="table-value">
                            <input type="text" name="name" maxlength="50">
                            <span><?php echo $name ?></span>
                        </td>
                        <td class="table-label">Asiakasryhmä:</td>
                        <td id="table-customerGroup" class="table-value">
                            <input type="text" name="customerGroup" maxlength="20">
                            <span><?php echo $customerGroup ?></span>
                        </td>
                        <td class="table-label">Tekijä:</td>
                        <td id="table-maker" class="table-value">
                            <input type="text" name="maker" maxlength="20" placeholder="Esim. JH">
                            <span><?php echo $maker ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-label">Pvm:</td>
                        <td id="table-date" class="table-value">
                            <input type="text" name="date" maxlength="19" placeholder="vvvv-kk-pp tt:mm:ss">
                            <span><?php echo $date ?></span>
                        </td>
                        <td class="table-label">Puhelin:</td>
                        <td id="table-phone" class="table-value">
                            <input type="text" name="phone" maxlength="10" pattern="^(0|[1-9][0-9]*)$" placeholder="0123456789">
                            <span><?php echo $phone ?></span>
                        </td>
                        <td class="table-label">Asiakasnumero:</td>
                        <td id="table-soldNumber" class="table-value">
                            <input type="number" name="soldNumber"  maxlength="5">
                            <span><?php echo $soldNumber ?></span>
                        </td>
                        <td class="table-label">Viite:</td>
                        <td id="table-soldRef" class="table-value">
                            <input type="text" name="soldRef"  maxlength="8">
                            <span><?php echo $soldRef ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-label">Tiili:</td>
                        <td id="table-tile" class="table-value">
                            <input type="text" name="tile" maxlength="20">
                            <span><?php echo $tile ?></span>
                        </td>
                        <td class="table-label">Toimitustapa:</td>
                        <td id="table-deliveryMode" class="table-value">
                            <input type="text" name="deliveryMode" maxlength="8" placeholder="Nosto/Nouto/Toimitus">
                            <span><?php echo $deliveryMode ?></span>
                        </td>
                        <td class="table-label">Asiakasnimi:</td>
                        <td id="table-soldName" class="table-value">
                            <input type="text" name="soldName" maxlength="30">
                            <span><?php echo $soldName ?></span>
                        </td>
                        <td class="table-label">Laskennan<br>päivien määrä:</td>
                        <td id="table-days" class="table-value">
                            <input type="number" name="days" max="99" min="0">
                            <span><?php echo $days ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-label">Väri:</td>
                        <td id="table-colour" class="table-value">
                            <input type="text" name="colour" maxlength="30">
                            <span><?php echo $colour ?></span>
                        </td>
                        <td class="table-label">Katunimi:</td>
                        <td id="table-street" class="table-value">
                            <input type="text" name="street" maxlength="30">
                            <span><?php echo $street ?></span>
                        </td>
                        <td class="table-label"></td>
                        <td></td>
                        <td class="table-label">Laskennan kesto:</td>
                        <td id="table-calculationTime" class="table-value">
                            <input type="number" name="calculationTime" max="999" min="0" placeholder="minuutit">
                            <span><?php echo $calculationTime ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-label">Kattoturvatuotteet:</td>
                        <td id="table-safetyProducts" class="table-value">
                            <input type="text" name="safetyProducts" maxlength="5" placeholder="Kyllä tai Ei">
                            <span><?php echo $safetyProducts ?></span>
                        </td>
                        <td class="table-label">Katunumero:</td>
                        <td id="table-streetNo" class="table-value">
                            <input type="text" name="streetNo" maxlength="8">
                            <span><?php echo $streetNo ?></span>
                        </td>
                        <td rowspan="5" class="table-label"></td>
                        <td rowspan="5"></td>
                        <td rowspan="5" class="table-label"></td>
                        <td rowspan="5"></td>
                    </tr>
                    <tr>
                        <td class="table-label">Sadevesituotteet:</td>
                        <td id="table-rainwaterProducts" class="table-value">
                            <input type="text" name="rainwaterProducts" maxlength="5" placeholder="Kyllä tai Ei">
                            <span><?php echo $rainwaterProducts ?></span>
                        </td>
                        <td class="table-label">Postinumero:</td>
                        <td id="table-postalCode" class="table-value">
                            <input type="text" name="postalCode" maxlength="5" pattern="^(0|[1-9][0-9]*)$">
                            <span><?php echo $postalCode ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-label">Katon muoto:</td>
                        <td id="table-roofShape" class="table-value">
                            <input type="text" name="roofShape" maxlength="20" placeholder="Esim. Harjakatto">
                            <span><?php echo $roofShape ?></span>
                        </td>
                        <td class="table-label">Kunta:</td>
                        <td id="table-city" class="table-value">
                            <input type="text" name="city" maxlength="20">
                            <span><?php echo $city ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-label">Katon kaltevuus:</td>
                        <td id="table-roofPitch" class="table-value">
                            <input type="number" name="roofPitch" max="90" min="0" placeholder="Asteluku">
                            <span><?php echo $roofPitch ?></span>
                        </td>
                        <td rowspan="2" class="table-label"></td>
                        <td rowspan="2"></td>
                    </tr>
                    <tr>
                        <td class="table-label">Päätytuotteet:</td>
                        <td id="table-vergeSolution" class="table-value">
                            <input type="text" name="vergeSolution" maxlength="11" placeholder="Esim. Päätypelti">
                            <span><?php echo $vergeSolution ?></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>