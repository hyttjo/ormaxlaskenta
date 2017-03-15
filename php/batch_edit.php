<?php
    $page = "batch_edit";    
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
                <?php include "batch_edit_table.php"; ?>  
            </div>              
        </div>

        <?php include "info_modal.php"; ?>
    </body>
</html>