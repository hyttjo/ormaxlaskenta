<?php
    $page = "orders";    
?>

<!DOCTYPE html>
<html lang="fi">
    <head>
        <?php include "head.php"; ?>
    </head>
    <body>
        <div class="div-container centered background-logo">
            <?php include "menu.php"; ?>
            <table id="orders_table">
            </table>        
        </div>

        <?php include "datatable_modal.php"; ?>

        <?php include "info_modal.php"; ?>
    </body>
</html>