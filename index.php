<!DOCTYPE html>
<html lang="fi">
    <head>
        <?php include "php/head.php"; ?>
    </head>
    <body>
        <div class="div-container centered background-logo">
        <?php include "php/menu.php"; ?>
            <div class="content-area full-width">
        <?php
            if (isset($_GET["type"])) { 
                include "php/order_and_quotation_table.php"; 
            } else {
                header('Location: php/quotations.php');     
            } 
        ?>
            </div>
        <?php
            if (isset($_GET["type"])) { 
                include "php/scripts/insert_rcs_to_db.php"; 
            }
        ?>
        </div>
    </body>
</html>