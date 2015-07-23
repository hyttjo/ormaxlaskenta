<?php 
    $menu_orders_selected = "";
    $menu_quotations_selected = "";
    $menu_accessories_quotations_selected = "";

    if ($page == "orders") {
        $menu_orders_selected = "button-menu-selected";
    } else if ($page == "quotations") {
        $menu_quotations_selected = "button-menu-selected";
    } else if  ($page == "accessories_quotations") {
        $menu_accessories_quotations_selected = "button-menu-selected";
    } else if  ($page == "batch-edit") {
        $menu_batch_edit_selected = "button-menu-selected";
    }
?>

    <div class="pure-menu pure-menu-horizontal margin-vertical-20px">
        <button id="button_orders" class="pure-button button-large button-error <?php echo $menu_orders_selected; ?>">Tilaukset</button>
        <button id="button_quotations"class="pure-button button-large button-error <?php echo $menu_quotations_selected; ?>">Tarjoukset</button>
        <button id="button_accessories_quotations"class="pure-button button-large button-error <?php echo $menu_accessories_quotations_selected; ?>">Lisätarviketarjoukset</button>
        <button id="button_batch_edit"class="pure-button button-large button-error <?php echo $menu_batch_edit_selected; ?>">Taulukko editointi</button>
    </div>