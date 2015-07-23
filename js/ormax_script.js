$(document).ready(function () {

    $('#button_orders').click(function () {
        window.location = 'http://ormaxlaskenta.gear.host/php/orders.php';
    });

    $('#button_quotations').click(function () {
        window.location = 'http://ormaxlaskenta.gear.host/php/quotations.php';
    });

    $('#button_accessories_quotations').click(function () {
        window.location = 'http://ormaxlaskenta.gear.host/php/accessories_quotations.php';
    });

    show_orders_table();

    function show_orders_table() {
        $("#orders_table").flexigrid({
            url: "scripts/get_table_results.php?table=tilaukset",
            dataType: 'json',
            colModel: [
                    { display: 'id', name: 'id', width: 40, sortable: true, align: 'left' },
                    { display: 'Pvm', name: 'pvm', width: 110, sortable: true, align: 'left' },
                    { display: 'Tiili', name: 'tiili', width: 70, sortable: true, align: 'left' },
                    { display: 'Väri', name: 'vari', width: 105, sortable: true, align: 'left' },
                    { display: 'As.ryhmä', name: 'asiakasryhma', width: 70, sortable: true, align: 'left' },
                    { display: 'As.nro', name: 'asiakasnumero', width: 40, sortable: true, align: 'left' },
                    { display: 'As.nimi', name: 'asiakasnimi', width: 90, sortable: true, align: 'left' },
                    { display: 'Nimi', name: 'nimi', width: 105, sortable: true, align: 'left' },
                    { display: 'Katu', name: 'katunimi', width: 100, sortable: true, align: 'left' },
                    { display: 'Katunro', name: 'katunumero', width: 40, sortable: true, align: 'left' },
                    { display: 'Postinro', name: 'postinumero', width: 45, sortable: true, align: 'left' },
                    { display: 'Kunta', name: 'kaupunki', width: 80, sortable: true, align: 'left' },
            ],
            buttons: [
                { name: 'Lisää', bclass: 'add', onpress: FlexiGridButtonCommand },
                { separator: true }
            ],
            searchitems: [
                    { display: 'Kaikki kentät', name: 'kaikkikentat', isdefault: true },
                    { display: 'Pvm (vvvv-kk-pp)', name: 'pvm' },
                    { display: 'Tiili', name: 'tiili' },
                    { display: 'Väri', name: 'vari' },
                    { display: 'Asiakasryhmä', name: 'asiakasryhma' },
                    { display: 'Viite', name: 'viite' },
                    { display: 'Asiakasnumero', name: 'asiakasnumero' },
                    { display: 'Asiakasnimi', name: 'asiakasnimi' },
                    { display: 'Nimi', name: 'nimi' },
                    { display: 'Puhelin', name: 'puh' },
                    { display: 'Katu', name: 'katunimi' },
                    { display: 'Postinumero', name: 'postinumero' },
                    { display: 'Kunta', name: 'kaupunki' }
            ],
            sortname: "pvm",
            sortorder: "desc",
            usepager: true,
            title: "Tilaukset",
            useRp: true,
            rp: 30,
            showTableToggleBtn: false,
            resizable: false,
            width: 1030,
            height: 'auto',
            singleSelect: true
        });
    }

    show_quotations_table();

    function show_quotations_table() {
        $("#quotations_table").flexigrid({
            url: "scripts/get_table_results.php?table=tarjoukset",
            dataType: 'json',
            colModel: [
                    { display: 'id', name: 'id', width: 40, sortable: true, align: 'left' },
                    { display: 'Pvm', name: 'pvm', width: 110, sortable: true, align: 'left' },
                    { display: 'Tiili', name: 'tiili', width: 70, sortable: true, align: 'left' },
                    { display: 'Väri', name: 'vari', width: 105, sortable: true, align: 'left' },
                    { display: 'As.ryhmä', name: 'asiakasryhma', width: 70, sortable: true, align: 'left' },
                    { display: 'As.nro', name: 'asiakasnumero', width: 40, sortable: true, align: 'left' },
                    { display: 'As.nimi', name: 'asiakasnimi', width: 90, sortable: true, align: 'left' },
                    { display: 'Nimi', name: 'nimi', width: 105, sortable: true, align: 'left' },
                    { display: 'Katu', name: 'katunimi', width: 100, sortable: true, align: 'left' },
                    { display: 'Katunro', name: 'katunumero', width: 40, sortable: true, align: 'left' },
                    { display: 'Postinro', name: 'postinumero', width: 45, sortable: true, align: 'left' },
                    { display: 'Kunta', name: 'kaupunki', width: 80, sortable: true, align: 'left' },
            ],
            buttons: [
                { name: 'Lisää', bclass: 'add', onpress: FlexiGridButtonCommand },
                { separator: true }
            ],
            searchitems: [
                    { display: 'Kaikki kentät', name: 'kaikkikentat', isdefault: true },
                    { display: 'Pvm (vvvv-kk-pp)', name: 'pvm' },
                    { display: 'Tiili', name: 'tiili' },
                    { display: 'Väri', name: 'vari' },
                    { display: 'Asiakasryhmä', name: 'asiakasryhma' },
                    { display: 'Viite', name: 'viite' },
                    { display: 'Asiakasnumero', name: 'asiakasnumero' },
                    { display: 'Asiakasnimi', name: 'asiakasnimi' },
                    { display: 'Nimi', name: 'nimi' },
                    { display: 'Puhelin', name: 'puh' },
                    { display: 'Katu', name: 'katunimi' },
                    { display: 'Postinumero', name: 'postinumero' },
                    { display: 'Kunta', name: 'kaupunki' },
            ],
            sortname: "pvm",
            sortorder: "desc",
            usepager: true,
            title: "Tarjoukset",
            useRp: true,
            rp: 30,
            showTableToggleBtn: false,
            resizable: false,
            width: 1030,
            height: 'auto',
            singleSelect: true
        });
    }

    show_accessories_quotations_table();

    function show_accessories_quotations_table() {
        $("#accessories_quotations_table").flexigrid({
            url: "scripts/get_table_results.php?table=lisatarviketarjoukset",
            dataType: 'json',
            colModel: [
                    { display: 'id', name: 'id', width: 40, sortable: true, align: 'left' },
                    { display: 'Pvm', name: 'pvm', width: 110, sortable: true, align: 'left' },
                    { display: 'Tiili', name: 'tiili', width: 70, sortable: true, align: 'left' },
                    { display: 'Väri', name: 'vari', width: 105, sortable: true, align: 'left' },
                    { display: 'Talotehdas', name: 'talotehdas', width: 70, sortable: true, align: 'left' },
                    { display: 'Ostotil.nro', name: 'ostotilausnro', width: 70, sortable: true, align: 'left' },
                    { display: 'Hinta', name: 'hinta', width: 60, sortable: true, align: 'left' },
                    { display: 'Nimi', name: 'nimi', width: 105, sortable: true, align: 'left' },
                    { display: 'Katu', name: 'katunimi', width: 100, sortable: true, align: 'left' },
                    { display: 'Katunro', name: 'katunumero', width: 40, sortable: true, align: 'left' },
                    { display: 'Postinro', name: 'postinumero', width: 45, sortable: true, align: 'left' },
                    { display: 'Kunta', name: 'kaupunki', width: 80, sortable: true, align: 'left' },
            ],
            buttons: [
                { name: 'Lisää', bclass: 'add', onpress: FlexiGridButtonCommand },
                { separator: true }
            ],
            searchitems: [
                    { display: 'Kaikki kentät', name: 'kaikkikentat', isdefault: true },
                    { display: 'Pvm (vvvv-kk-pp)', name: 'pvm' },
                    { display: 'Toimitus Pvm', name: 'toimituspvm' },
                    { display: 'Tiili', name: 'tiili' },
                    { display: 'Väri', name: 'vari' },
                    { display: 'Talotehdas', name: 'talotehdas' },
                    { display: 'Ostotilausnumero', name: 'ostotilausnro' },
                    { display: 'Nimi', name: 'nimi' },
                    { display: 'Puhelin', name: 'puh' },
                    { display: 'Email', name: 'email' },
                    { display: 'Katu', name: 'katunimi' },
                    { display: 'Postinumero', name: 'postinumero' },
                    { display: 'Kunta', name: 'kaupunki' }
            ],
            sortname: "pvm",
            sortorder: "desc",
            usepager: true,
            title: "Lisätarviketarjoukset",
            useRp: true,
            rp: 30,
            showTableToggleBtn: false,
            resizable: false,
            width: 1030,
            height: 'auto',
            singleSelect: true
        });
    }

    $('.sDiv').css('display', 'block');

    function FlexiGridButtonCommand(com, grid) {
        if (com == 'Lisää') {
            ShowAddNewModal();
        }
    }

    $(document).on('click', '.rowInfo', function () {
        var id = $(this).data('id');
        ShowModal(id);
    });

    function ShowModal(id) {
        var type = GetTypeFromTableTitle();

        $.ajax({
            type: "post",
            url: "/php/scripts/get_table_row_info.php",
            data: "type=" + type + "&id=" + id,
            success: function (data) {
                var json = $.parseJSON(data);

                SetInfoTable(type, json);
            }
        });
        $('#order_and_quotation_modal').modal('show');
    }

    function ShowAddNewModal() {
        var type = GetTypeFromTableTitle();
        $(".modal-title").text("Lisää uusi " + type.toLowerCase());
        $("#table-header").text("Ormax - " + type + "-määrälaskenta");
        ModalAddNewMode();
        $('#order_and_quotation_modal').modal('show');
    }

    function SetInfoTable(type, json) {
        $(".modal-title").text(type + " - (id: " + json.id + ")");
        $('#info-table').data('id', json.id);
        $("#table-header").text("Ormax - " + type + "-määrälaskenta");

        SetInfoTableTexts(type, json);
        SetInfoTableInputValues(json);
    }

    function SetInfoTableTexts(type, json) {
        $("#table-type").text(type);
        $("#table-date span").text(json.pvm);
        $("#table-tile span").text(json.tiili);
        $("#table-colour span").text(json.vari);
        $("#table-safetyProducts span").text(json.kattoturva);
        $("#table-rainwaterProducts span").text(json.sadevesi);
        $("#table-roofShape span").text(json.muoto);
        $("#table-roofPitch span").text(json.kaltevuus);
        $("#table-vergeSolution span").text(json.paaty);
        $("#table-deliveryMode span").text(json.toimitustapa);
        $("#table-customerGroup span").text(json.asiakasryhma);
        $("#table-soldNumber span").text(json.asiakasnumero);
        $("#table-soldName span").text(json.asiakasnimi);
        $("#table-soldRef span").text(json.viite);
        $("#table-name span").text(json.nimi);
        $("#table-phone span").text(json.puh);
        $("#table-street span").text(json.katunimi);
        $("#table-streetNo span").text(json.katunumero);
        $("#table-postalCode span").text(json.postinumero);
        $("#table-city span").text(json.kaupunki);
        $("#table-maker span").text(json.tekija);
        $("#table-days span").text(json.paivienkesto);
        $("#table-calculationTime span").text(json.laskennankesto);
        $("#table-email span").text(json.email);
        $("#table-contactPerson span").text(json.kontaktihenkilo);
        $("#table-houseFactory span").text(json.talotehdas);
        $("#table-orderNumber span").text(json.ostotilausnro);
        $("#table-price span").text(json.hinta);
        $("#table-deliveryDate span").text(json.toimituspvm);
        $("#table-responsibility span").text(json.asiakkaanvastuulla);
    }

    function SetInfoTableInputValues(json) {
        $("#table-date input").val(json.pvm);
        $("#table-tile input").val(json.tiili);
        $("#table-colour input").val(json.vari);
        $("#table-safetyProducts input").val(json.kattoturva);
        $("#table-rainwaterProducts input").val(json.sadevesi);
        $("#table-roofShape input").val(json.muoto);
        $("#table-roofPitch input").val(json.kaltevuus);
        $("#table-vergeSolution input").val(json.paaty);
        $("#table-deliveryMode input").val(json.toimitustapa);
        $("#table-customerGroup input").val(json.asiakasryhma);
        $("#table-soldNumber input").val(json.asiakasnumero);
        $("#table-soldName input").val(json.asiakasnimi);
        $("#table-soldRef input").val(json.viite);
        $("#table-name input").val(json.nimi);
        $("#table-phone input").val(json.puh);
        $("#table-street input").val(json.katunimi);
        $("#table-streetNo input").val(json.katunumero);
        $("#table-postalCode input").val(json.postinumero);
        $("#table-city input").val(json.kaupunki);
        $("#table-maker input").val(json.tekija);
        $("#table-days input").val(json.paivienkesto);
        $("#table-calculationTime input").val(json.laskennankesto);
        $("#table-email input").val(json.email);
        $("#table-contactPerson input").val(json.kontaktihenkilo);
        $("#table-houseFactory input").val(json.talotehdas);
        $("#table-orderNumber input").val(json.ostotilausnro);
        $("#table-price input").val(json.hinta);
        $("#table-deliveryDate input").val(json.toimituspvm);
        $("#table-responsibility input").val(json.asiakkaanvastuulla);
    }

    function GetInfoTableJSON() {
        var json = [];

        json.push({ 'id': $('#info-table').data('id') });
        json.push({ 'type': $('#table-type').text() });
        json.push({ 'date': $("#table-date input").val() });
        json.push({ 'tile': $("#table-tile input").val() });
        json.push({ 'colour': $("#table-colour input").val() });
        json.push({ 'safety': $("#table-safetyProducts input").val() });
        json.push({ 'rainwater': $("#table-rainwaterProducts input").val() });
        json.push({ 'shape': $("#table-roofShape input").val() });
        json.push({ 'pitch': $("#table-roofPitch input").val() });
        json.push({ 'verge': $("#table-vergeSolution input").val() });
        json.push({ 'delivery': $("#table-deliveryMode input").val() });
        json.push({ 'group': $("#table-customerGroup input").val() });
        json.push({ 'soldnumber': $("#table-soldNumber input").val() });
        json.push({ 'soldname': $("#table-soldName input").val() });
        json.push({ 'soldref': $("#table-soldRef input").val() });
        json.push({ 'name': $("#table-name input").val() });
        json.push({ 'phone': $("#table-phone input").val() });
        json.push({ 'street': $("#table-street input").val() });
        json.push({ 'streetno': $("#table-streetNo input").val() });
        json.push({ 'postal': $("#table-postalCode input").val() });
        json.push({ 'city': $("#table-city input").val() });
        json.push({ 'maker': $("#table-maker input").val() });
        json.push({ 'days': $("#table-days input").val() });
        json.push({ 'calctime': $("#table-calculationTime input").val() });
        json.push({ 'email': $("#table-email input").val() });
        json.push({ 'contact': $("#table-contactPerson input").val() });
        json.push({ 'factory': $("#table-houseFactory input").val() });
        json.push({ 'order': $("#table-orderNumber input").val() });
        json.push({ 'price': $("#table-price input").val() });
        json.push({ 'deliverydate': $("#table-deliveryDate input").val() });
        json.push({ 'responsibility': $("#table-responsibility input").val() });
  
        return json;
    }

    function ClearInputs() {
        $('input').each(function () {
            $(this).val('');
        });
    }

    $('#modal-add').click(function () {
        var json = GetInfoTableJSON();
        var www = "http://ormaxlaskenta.gear.host/"
        var url = "";

        $.each(json, function (key, value) {
            $.each(value, function (key, value) {
                if (url == "") {
                    url = "?" + key + "=" + value;
                } else {
                    url = url + "&" + key + "=" + value;
                }
            });
        });
        window.location.href = www + encodeURI(url);
    });

    function ModalAddNewMode() {
        ClearInputs();
        $("#table-type").text(GetTypeFromTableTitle());
        $("#table-date input").val(GetDateTimeNow());
        $('#modal-delete').hide();
        $('#modal-edit').hide();
        $('#modal-add').show();
        $('.table-value span').hide();
        $('.table-value input').show();
    }

    $('#modal-edit').click(function () {
        ModalEditMode();
    });

    function ModalEditMode() {
        $('#modal-edit').hide();
        $('#modal-update').show();
        $('.modal-deleteConfirmation').hide();
        $('.table-value span').hide();
        $('.table-value input').show();
    }

    $('#modal-update').click(function () {
        $('#order_and_quotation_modal').modal('hide');
        var jsonData = GetInfoTableJSON();

        $.ajax({
            type: 'post',
            url: '/php/scripts/update_table_row.php',
            data: { json: jsonData },
            success: function (data) {
                $('#info_modal').modal('show');
                $('#info_modal .modal-body').html(data);
                ReloadFlexigrid();
            }
        });
    });

    $('#modal-delete').click(function () {
        $('.modal-deleteConfirmation').show();
    });

    $('#modal-deleteCancel').click(function () {
        $('.modal-deleteConfirmation').hide();
    });

    $('#modal-deleteConfirmation').click(function () {
        $('#order_and_quotation_modal').modal('hide');
        var table = GetTableFromType(GetTypeFromTableTitle());
        var id = $('#info-table').data('id');

        $.ajax({
            type: "post",
            url: "/php/scripts/delete_from_db.php",
            data: "table=" + table + "&id=" + id,
            success: function (data) {
                $('#info_modal').modal('show');
                $('#info_modal .modal-body').html(data);
                ReloadFlexigrid();
            }
        });
        $('.modal-deleteConfirmation').hide();
    });

    function ModalInfoMode() {
        $('#modal-add').hide();
        $('#modal-delete').show();
        $('#modal-edit').show();
        $('#modal-update').hide();
        $('.modal-deleteConfirmation').hide();
        $('.table-value span').show();
        $('.table-value input').hide();
    }

    $('#order_and_quotation_modal').on('hidden.bs.modal', function () {
        ModalInfoMode();
    });

    function ReloadFlexigrid() {
        $("#orders_table").flexReload();
        $("#quotations_table").flexReload();
        $("#accessories_quotations_table").flexReload();
    }

    function GetTypeFromTableTitle() {
        var tableTitle = $('.ftitle').text();

        if (tableTitle == 'Tarjoukset') {
            return "Tarjous";
        } else if (tableTitle == 'Tilaukset') {
            return "Tilaus";
        } else if (tableTitle == 'Lisätarviketarjoukset') {
            return "Lisätarviketarjous";
        } else {
            return "";
        }
    }

    function GetTableFromType(type) {
        if (type == 'Tarjous') {
            return "tarjoukset";
        } else if (type == 'Tilaus') {
            return "tilaukset";
        } else if (type == 'Lisätarviketarjous') {
            return "lisätarviketarjoukset";
        } else {
            return "";
        }
    }

    function GetDateTimeNow() {
        var datetime = new Date();
        var yyyy = datetime.getFullYear().toString();
        var mm = (datetime.getMonth() + 1).toString();
        var dd = datetime.getDate().toString();
        var HH = datetime.getHours().toString();
        var MM = datetime.getMinutes().toString();
        var SS = datetime.getSeconds().toString();

        return yyyy + "-" + (mm[1] ? mm : "0" + mm[0]) + "-" + (dd[1] ? dd : "0" + dd[0]) + " " + (HH[1] ? HH : "0" + HH[0]) + ":" + (MM[1] ? MM : "0" + MM[0]) + ":" + (SS[1] ? SS : "0" + SS[0]);
    }
});