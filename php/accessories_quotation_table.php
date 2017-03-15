<?php
    $type = isset($_GET["type"]) ? $_GET["type"] : "";
    $date = isset($_GET["date"]) ? $_GET["date"] : "";
    $tile = isset($_GET["tile"]) ? $_GET["tile"] : "";
    $colour = isset($_GET["colour"]) ? $_GET["colour"] : "";
    $houseFactory = isset($_GET["factory"]) ? $_GET["factory"] : "";
    $orderNumber = isset($_GET["order"]) ? $_GET["order"] : "";
    $name = isset($_GET["name"]) ? $_GET["name"] : "";
    $phone = isset($_GET["phone"]) ? $_GET["phone"] : "";
    $email = isset($_GET["email"]) ? $_GET["email"] : "";
    $contactPerson = isset($_GET["contact"]) ? $_GET["contact"] : "";
    $street = isset($_GET["street"]) ? $_GET["street"] : "";
    $streetNo = isset($_GET["streetno"]) ? $_GET["streetno"] : "";
    $postalCode = isset($_GET["postal"]) ? $_GET["postal"] : "";
    $city = isset($_GET["city"]) ? $_GET["city"] : "";
    $price = isset($_GET["price"]) ? $_GET["price"] : "";
    $deliveryDate = isset($_GET["deliverydate"]) ? $_GET["deliverydate"] : "";
    $emailRef = isset($_GET["emailref"]) ? $_GET["emailref"] : "";    
?>
        <form autocomplete="off">
            <table id="info-table" class="pure-table table-condensed full-width centered border table-accessories" data-id="" data-table="">
                <thead>
                    <tr>
                        <th colspan="6" id="table-header">Ormax - Lisätarvikelaskenta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2" class="table-subheader noborder-left">Laskennantiedot</td>
                        <td colspan="2" class="table-subheader">Toimitus / Asiakas</td></td>
                        <td colspan="2" class="table-subheader">Talotehdas</td>
                    </tr>
                    <tr>
                        <td class="table-label">Laskennan tyyppi:</td>
                        <td id="table-type" class="table-value">
                            <?php echo $type ?>
                        </td>
                        <td class="table-label">Nimi:</td>
                        <td id="table-name" class="table-value">
                            <input type="text" name="name"  maxlength="50" data-col="nimi">
                            <span><?php echo $name ?></span>
                        </td>
                        <td class="table-label">Talotehdas:</td>
                        <td id="table-houseFactory" class="table-value">
                            <input type="text" name="houseFactory" maxlength="20" placeholder="Esim. Kastelli" data-col="talotehdas">
                            <span><?php echo $houseFactory ?></span>
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
                            <input type="text" name="phone" maxlength="11" pattern="/^(\d+-?)+\d+$/" placeholder="012-3456789">
                            <span><?php echo $phone ?></span>
                        </td>
                        <td class="table-label">Ostotilausnumero:</td>
                        <td id="table-orderNumber" class="table-value">
                            <input type="text" name="orderNumber" maxlength="20">
                            <span><?php echo $orderNumber ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-label">Tiili:</td>
                        <td id="table-tile" class="table-value">
                            <input type="text" name="tile" maxlength="20" data-col="tiili">
                            <span><?php echo $tile ?></span>
                        </td>
                        <td class="table-label">Email:</td>
                        <td id="table-email" class="table-value">
                            <input type="email" name="email" maxlength="40" placeholder="email@osoite.com" data-col="email">
                            <span><?php echo $email ?></span>
                        </td>
                        <td class="table-label">Hinta:</td>
                        <td id="table-price" class="table-value">
                            <input type="number" name="price" maxlength="10" pattern="/^[0-9.,]+$/" placeholder="0000,00">
                            <span><?php echo $price ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-label">Väri:</td>
                        <td id="table-colour" class="table-value">
                            <input type="text" name="colour" maxlength="30" data-col="vari">
                            <span><?php echo $colour ?></span>
                        </td>
                        <td class="table-label">Yhteyshenkilö:</td>
                        <td id="table-contactPerson" class="table-value">
                            <input type="text" name="contactPerson" maxlength="30" data-col="kontaktihenkilo">
                            <span><?php echo $contactPerson ?></span>
                        </td>
                        <td class="table-label">Toimituspäivä:</td>
                        <td id="table-deliveryDate" class="table-value">
                            <input type="text" name="deliveryDate" maxlength="19" placeholder="vvvv-kk-pp">
                            <span><?php echo $deliveryDate ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-label"></td>
                        <td></td>
                        <td class="table-label">Katunimi:</td>
                        <td id="table-street" class="table-value">
                            <input type="text" name="street" maxlength="30" data-col="katunimi">
                            <span><?php echo $street ?></span>
                        </td>
                        <td class="table-label">Sähköpostin tunnus:</td>
                            <td id="table-emailRef" class="table-value">
                            <input type="text" name="emailRef"  maxlength="12">
                            <span><?php echo $emailRef ?></span>                        
                        </td>
                    </tr>
                    <tr>
                        <td class="table-label"></td>
                        <td></td>
                        <td class="table-label">Katunumero:</td>
                        <td id="table-streetNo" class="table-value">
                            <input type="text" name="streetNo" maxlength="8">
                            <span><?php echo $streetNo ?></span>
                        </td>
                        <td class="table-label"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="table-label"></td>
                        <td></td>
                        <td class="table-label">Postinumero:</td>
                        <td id="table-postalCode" class="table-value">
                            <input type="text" name="postalCode" maxlength="5" pattern="^(0|[1-9][0-9]*)$" data-col="postinumero">
                            <span><?php echo $postalCode ?></span>
                        </td>
                        <td class="table-label"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="table-label"></td>
                        <td></td>
                        <td class="table-label">Kunta:</td>
                        <td id="table-city" class="table-value">
                            <input type="text" name="city" maxlength="20" data-col="kaupunki">
                            <span><?php echo $city ?></span>
                        </td>
                        <td class="table-label"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="6" class="table-label">
                            <div id="google-maps"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>