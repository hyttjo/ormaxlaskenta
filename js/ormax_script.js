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

    $('#button_batch_edit').click(function () {
        window.location = 'http://ormaxlaskenta.gear.host/php/batch_edit.php';
    });

    $('#button_charts').click(function () {
        window.location = 'http://ormaxlaskenta.gear.host/php/charts.php';
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
                { separator: true },
                { name: 'Lataa', bclass: 'download', onpress: FlexiGridButtonCommand },
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
                    { display: 'Email tunnus', name: 'emailtunnus' }
            ],
            sortname: "pvm",
            sortorder: "desc",
            usepager: true,
            title: "Tilaukset",
            useRp: true,
            rp: 30,
            showToggleBtn: false,
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
                { separator: true },
                { name: 'Lataa', bclass: 'download', onpress: FlexiGridButtonCommand },
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
                    { display: 'Email tunnus', name: 'emailtunnus' }
            ],
            sortname: "pvm",
            sortorder: "desc",
            usepager: true,
            title: "Tarjoukset",
            useRp: true,
            rp: 30,
            showToggleBtn: false,
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
                { separator: true },
                { name: 'Lataa', bclass: 'download', onpress: FlexiGridButtonCommand },
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
                    { display: 'Kunta', name: 'kaupunki' },
                    { display: 'Email tunnus', name: 'emailtunnus' }
            ],
            sortname: "pvm",
            sortorder: "desc",
            usepager: true,
            title: "Lisätarviketarjoukset",
            useRp: true,
            rp: 30,
            showToggleBtn: false,
            resizable: false,
            width: 1030,
            height: 'auto',
            singleSelect: true
        });
    }

    InitializeDatePicker($("input[name='startdate']"));
    InitializeDatePicker($("input[name='enddate']"));

    function InitializeDatePicker(element) {
        $(element).datepicker({
            dateFormat: 'yy-mm-dd',
            shoAnim: 'slideDown',
            showButtonPanel: true,
            currentText: 'Tänään',
            closeText: 'Sulje',
            changeMonth: true,
            changeYear: true,
            dayNamesMin: ["Ma", "Ti", "Ke", "To", "Pe", "La", "Su"],
            monthNamesShort: ["Tammi", "Helmi", "Maalis", "Huhti", "Touko", "Kesä", "Heinä", "Elo", "Syys", "Loka", "Marras", "Joulu"]
        });
    }

    $('.sDiv').css('display', 'block');

    function FlexiGridButtonCommand(com, grid) {
        if (com == 'Lisää') {
            ShowAddNewModal();
        } else if (com == 'Lataa') {
            DownloadCSVTable();
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
                GetAddressForMap();
            }
        });
        $('#order_and_quotation_modal').modal('show');
    }

    function DownloadCSVTable() {
        var table = GetTableFromType(GetTypeFromTableTitle());

        window.location.href = "http://ormaxlaskenta.gear.host/php/scripts/download_csv_table.php?table=" + table;
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
        $("#table-ventilationProducts span").text(json.lapivienti);
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
        $("#table-emailRef span").text(json.emailtunnus);
    }

    function SetInfoTableInputValues(json) {
        $("#table-date input").val(json.pvm);
        $("#table-tile input").val(json.tiili);
        $("#table-colour input").val(json.vari);
        $("#table-safetyProducts input").val(json.kattoturva);
        $("#table-rainwaterProducts input").val(json.sadevesi);
        $("#table-ventilationProducts input").val(json.lapivienti);
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
        $("#table-emailRef input").val(json.emailtunnus);
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
        json.push({ 'ventilation': $("#table-ventilationProducts input").val() });
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
        json.push({ 'emailref': $("#table-emailRef input").val() });

        return json;
    }

    ToggleOrderTableFieldVisibilty();

    function ToggleOrderTableFieldVisibilty() {
        if (GetTypeFromTableTitle() == 'Tilaus') {
            var responsibility = $("#table-responsibility");
            responsibility.empty();
            responsibility.prev().empty();
        }
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
        } else if (tableTitle == '') {
            return $('#info-table').data('table');
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
            return "lisatarviketarjoukset";
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

    $('#batch_edit_table .first_column_selection').chained('#batch_edit_table .table_selection');
    $('#map-chart-tab .first_column_selection').chained('#map-chart-tab .table_selection');
    $('#timeline-chart-tab .first_column_selection').chained('#timeline-chart-tab .table_selection');
    $('#tileandcolour-chart-tab .first_column_selection').chained('#tileandcolour-chart-tab .table_selection');
    $('#percentages-chart-tab .first_column_selection').chained('#percentages-chart-tab .table_selection');

    $('#batch_edit_table .second_column_selection').chained('#batch_edit_table .table_selection');
    $('#percentages-chart-tab .second_column_selection').chained('#percentages-chart-tab .table_selection');

    $('.table_selection').change(function () {
        $('.first_input').val('');
    });

    $('.first_column_selection').change(function () {
        var value = $(this).val();
        if (!$('.second_column_selection').hasClass('static')) {
            $('.second_column_selection').val(value);
        }
    });

    $('#batch_edit_table button').click(function () {
        $('.batchEdit-executeConfirmation').show();
        ExecuteBatchEdit("false");
    });

    $('#batchEdit-executeConfirmation').click(function () {
        ExecuteBatchEdit("true");
        $('.batchEdit-executeConfirmation').hide();
    });

    $('#batchEdit-executeCancel').click(function () {
        $('.batchEdit-executeConfirmation').hide();
    });

    function ExecuteBatchEdit(execute) {
        var table = $('.table_selection').val();
        var first_column = $('.first_column_selection').val();
        var logic = $('.logic_selection').val();
        var first_input = $('.first_input').val();
        var second_column = $('.second_column_selection').val();
        var second_input = $('.second_input').val();

        $.ajax({
            type: "post",
            url: "/php/scripts/batch_edit_db.php",
            data: "execute=" + execute + "&table=" + table + "&first_column=" + first_column + "&logic=" + logic + "&first_input=" + first_input + "&second_column=" + second_column + "&second_input=" + second_input,
            success: function (data) {
                if (execute == "true") {
                    $('#info_modal').modal('show');
                    $('#info_modal .modal-body').html(data);
                } else {
                    $('.batchEdit-executeInfo').html(data);
                }
            }
        });
    }

    $(".first_input").autocomplete({
        source: function (request, response) {
            var table = $('.table_selection').val();
            var column = $('.first_column_selection').val();

            $.ajax({
                url: "/php/scripts/autocomplete.php",
                data: { term: request.term, table: table, column: column },
                dataType: "json",
                success: function (data) {
                    response($.map(data.data, function (item) {
                        return {
                            label: item.result,
                            value: item.result
                        }
                    }));
                }
            });
        },
        minLength: 0
    }).focus(function () {
        $(this).autocomplete("search", $(this).val());
    });

    $("input.qsbox").autocomplete({
        source: function (request, response) {
            var table = GetTableFromType(GetTypeFromTableTitle());
            var column = $("select[name='qtype']").val();

            $.ajax({
                url: "/php/scripts/autocomplete.php",
                data: { term: request.term, table: table, column: column },
                dataType: "json",
                success: function (data) {
                    response($.map(data.data, function (item) {
                        return {
                            label: item.result,
                            value: item.result
                        }
                    }));
                }
            });
        },
        minLength: 2
    });

    $('#info-form input[data-col]').each(function () {
        var table = GetTableFromType(GetTypeFromTableTitle());
        var column = $(this).data('col');

        $(this).autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "/php/scripts/autocomplete.php",
                    data: { term: request.term, table: table, column: column },
                    dataType: "json",
                    success: function (data) {
                        response($.map(data.data, function (item) {
                            return {
                                label: item.result,
                                value: item.result
                            }
                        }));
                    }
                });
            },
            minLength: 0
        }).focus(function () {
            $(this).autocomplete("search", $(this).val());
        });
    });

    ShowMapCharts();
    ShowTimelineChart();
    ShowTileAndColourChart();
    ShowPercentagesChart();

    $('#map-chart-tab #chart-filter-execute').click(function () {
        ShowMapCharts();
    });

    function ShowMapCharts() {
        var table = $('#map-chart-tab .table_selection').val();
        var column = $('#map-chart-tab .first_column_selection').val();
        var logic = $('#map-chart-tab .logic_selection').val();
        var input = $('#map-chart-tab .first_input').val();
        var year_0 = $('#map-chart-tab input[name=year_0]').prop('checked') ? $('#map-chart-tab input[name=year_0]').val() : "";
        var year_1 = $('#map-chart-tab input[name=year_1]').prop('checked') ? $('#map-chart-tab input[name=year_1]').val() : "";
        var year_2 = $('#map-chart-tab input[name=year_2]').prop('checked') ? $('#map-chart-tab input[name=year_2]').val() : "";
        var year_3 = $('#map-chart-tab input[name=year_3]').prop('checked') ? $('#map-chart-tab input[name=year_3]').val() : "";
        var year_4 = $('#map-chart-tab input[name=year_4]').prop('checked') ? $('#map-chart-tab input[name=year_4]').val() : "";
        var year_5 = $('#map-chart-tab input[name=year_5]').prop('checked') ? $('#map-chart-tab input[name=year_5]').val() : "";

        $('#map-chart-tab .first_chart_image').attr('src', '/php/scripts/statistics/statistics_postal_area_chart.php?table=' + table + '&column=' + column + '&logic=' + logic + '&input=' + input + '&year_0=' + year_0 + '&year_1=' + year_1 + '&year_2=' + year_2 + '&year_3=' + year_3 + '&year_4=' + year_4 + '&year_5=' + year_5);
        $('#map-chart-tab .second_chart_image').attr('src', '/php/scripts/statistics/statistics_postal_area_map.php?table=' + table + '&column=' + column + '&logic=' + logic + '&input=' + input + '&year_0=' + year_0 + '&year_1=' + year_1 + '&year_2=' + year_2 + '&year_3=' + year_3 + '&year_4=' + year_4 + '&year_5=' + year_5);
    }

    $('#timeline-chart-tab #chart-filter-execute').click(function () {
        ShowTimelineChart();
    });

    function ShowTimelineChart() {
        var table = $('#timeline-chart-tab .table_selection').val();
        var column = $('#timeline-chart-tab .first_column_selection').val();
        var logic = $('#timeline-chart-tab .logic_selection').val();
        var input = $('#timeline-chart-tab .first_input').val();
        var year_0 = $('#timeline-chart-tab input[name=year_0]').prop('checked') ? $('#timeline-chart-tab input[name=year_0]').val() : "";
        var year_1 = $('#timeline-chart-tab input[name=year_1]').prop('checked') ? $('#timeline-chart-tab input[name=year_1]').val() : "";
        var year_2 = $('#timeline-chart-tab input[name=year_2]').prop('checked') ? $('#timeline-chart-tab input[name=year_2]').val() : "";
        var year_3 = $('#timeline-chart-tab input[name=year_3]').prop('checked') ? $('#timeline-chart-tab input[name=year_3]').val() : "";
        var year_4 = $('#timeline-chart-tab input[name=year_4]').prop('checked') ? $('#timeline-chart-tab input[name=year_4]').val() : "";
        var year_5 = $('#timeline-chart-tab input[name=year_5]').prop('checked') ? $('#timeline-chart-tab input[name=year_5]').val() : "";

        $('#timeline-chart-tab .first_chart_image').attr('src', '/php/scripts/statistics/statistics_timeline_chart.php?table=' + table + '&column=' + column + '&logic=' + logic + '&input=' + input + '&year_0=' + year_0 + '&year_1=' + year_1 + '&year_2=' + year_2 + '&year_3=' + year_3 + '&year_4=' + year_4 + '&year_5=' + year_5);
    }

    $('#tileandcolour-chart-tab #chart-filter-execute').click(function () {
        ShowTileAndColourChart();
    });

    function ShowTileAndColourChart() {
        var table = $('#tileandcolour-chart-tab .table_selection').val();
        var column = $('#tileandcolour-chart-tab .first_column_selection').val();
        var logic = $('#tileandcolour-chart-tab .logic_selection').val();
        var input = $('#tileandcolour-chart-tab .first_input').val();
        var year_0 = $('#tileandcolour-chart-tab input[name=year_0]').prop('checked') ? $('#tileandcolour-chart-tab input[name=year_0]').val() : "";
        var year_1 = $('#tileandcolour-chart-tab input[name=year_1]').prop('checked') ? $('#tileandcolour-chart-tab input[name=year_1]').val() : "";
        var year_2 = $('#tileandcolour-chart-tab input[name=year_2]').prop('checked') ? $('#tileandcolour-chart-tab input[name=year_2]').val() : "";
        var year_3 = $('#tileandcolour-chart-tab input[name=year_3]').prop('checked') ? $('#tileandcolour-chart-tab input[name=year_3]').val() : "";
        var year_4 = $('#tileandcolour-chart-tab input[name=year_4]').prop('checked') ? $('#tileandcolour-chart-tab input[name=year_4]').val() : "";
        var year_5 = $('#tileandcolour-chart-tab input[name=year_5]').prop('checked') ? $('#tileandcolour-chart-tab input[name=year_5]').val() : "";

        $('#tileandcolour-chart-tab .first_chart_image').attr('src', '/php/scripts/statistics/statistics_tile_and_colour_chart.php?table=' + table + '&column=' + column + '&logic=' + logic + '&input=' + input + '&year_0=' + year_0 + '&year_1=' + year_1 + '&year_2=' + year_2 + '&year_3=' + year_3 + '&year_4=' + year_4 + '&year_5=' + year_5);
    }

    $('#percentages-chart-tab #chart-filter-execute').click(function () {
        ShowPercentagesChart();
    });

    function ShowPercentagesChart() {
        var table = $('#percentages-chart-tab .table_selection').val();
        var searchcolumn = $('#percentages-chart-tab .first_column_selection').val();
        var logic = $('#percentages-chart-tab .logic_selection').val();
        var input = $('#percentages-chart-tab .first_input').val();
        var column = $('#percentages-chart-tab .second_column_selection').val();
        var year_0 = $('#percentages-chart-tab input[name=year_0]').prop('checked') ? $('#percentages-chart-tab input[name=year_0]').val() : "";
        var year_1 = $('#percentages-chart-tab input[name=year_1]').prop('checked') ? $('#percentages-chart-tab input[name=year_1]').val() : "";
        var year_2 = $('#percentages-chart-tab input[name=year_2]').prop('checked') ? $('#percentages-chart-tab input[name=year_2]').val() : "";
        var year_3 = $('#percentages-chart-tab input[name=year_3]').prop('checked') ? $('#percentages-chart-tab input[name=year_3]').val() : "";
        var year_4 = $('#percentages-chart-tab input[name=year_4]').prop('checked') ? $('#percentages-chart-tab input[name=year_4]').val() : "";
        var year_5 = $('#percentages-chart-tab input[name=year_5]').prop('checked') ? $('#percentages-chart-tab input[name=year_5]').val() : "";

        $('#percentages-chart-tab .first_chart_image').attr('src', '/php/scripts/statistics/statistics_pie_chart.php?table=' + table + '&searchcolumn=' + searchcolumn + '&logic=' + logic + '&input=' + input + '&column=' + column + '&year_0=' + year_0 + '&year_1=' + year_1 + '&year_2=' + year_2 + '&year_3=' + year_3 + '&year_4=' + year_4 + '&year_5=' + year_5);
    }

    InitializeChartsAutocomplete($('#map-chart-tab'));
    InitializeChartsAutocomplete($('#timeline-chart-tab'));
    InitializeChartsAutocomplete($('#tileandcolour-chart-tab'));
    InitializeChartsAutocomplete($('#percentages-chart-tab'));

    function InitializeChartsAutocomplete(tab) {
        $(tab).find(".first_input").autocomplete({
            source: function (request, response) {
                var table = $(tab).find('.table_selection').val();
                var column = $(tab).find('.first_column_selection').val();

                $.ajax({
                    url: "/php/scripts/autocomplete.php",
                    data: { term: request.term, table: table, column: column },
                    dataType: "json",
                    success: function (data) {
                        response($.map(data.data, function (item) {
                            return {
                                label: item.result,
                                value: item.result
                            }
                        }));
                    }
                });
            },
            minLength: 0
        }).focus(function () {
            $(this).autocomplete("search", $(this).val());
        });
    }

    $('#batch_edit_table .logic_selection').change(function () { ToggleInputReadOnlyByLogicChange($('#batch_edit_table')); });
    $('#map-chart-tab .logic_selection').change(function () { ToggleInputReadOnlyByLogicChange($('#map-chart-tab')); });
    $('#timeline-chart-tab .logic_selection').change(function () { ToggleInputReadOnlyByLogicChange($('#timeline-chart-tab')); });
    $('#tileandcolour-chart-tab .logic_selection').change(function () { ToggleInputReadOnlyByLogicChange($('#tileandcolour-chart-tab')); });
    $('#percentages-chart-tab .logic_selection').change(function () { ToggleInputReadOnlyByLogicChange($('#percentages-chart-tab')); });

    function ToggleInputReadOnlyByLogicChange(parent) {
        if ($(parent).find('.logic_selection').val() == 'null') {
            $(parent).find('.first_input').prop('readonly', true);
            $(parent).find('.first_input').css('background-color', '#ccc');
        } else {
            $(parent).find('.first_input').prop('readonly', false);
            $(parent).find('.first_input').css('background-color', '#fff');
        }
    }

    var map;
    var markers = [];
    var infowindows = [];
    Init_GoogleMaps();
    GetAddressForMap();

    function Init_GoogleMaps() {
        var latlng = new google.maps.LatLng(62.576083, 26.031889);
        var mapOptions = { zoom: 6, center: latlng };

        map = new google.maps.Map(document.getElementById('google-maps'), mapOptions);

        $('#order_and_quotation_modal').on('shown.bs.modal', function () {
            google.maps.event.trigger(map, 'resize');
            map.setCenter(latlng);
        });
    }

    function GetAddressForMap() {
        var geocoder = new google.maps.Geocoder();
        var street = $("#table-street span").text();
        if (street == "toimitusosoite") { street = ""; }
        var streetNo = $("#table-streetNo span").text();
        streetNo = streetNo.split(" ")[0];
        var postalCode = $("#table-postalCode span").text();
        var city = $("#table-city span").text();
        var address = street + " " + streetNo + " " + postalCode + " " + city;

        ResetMap();
        if (address.length > 3) {
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var addr_type = results[0].types[0];
                    ShowLocationOnMap(results[0].geometry.location, address, addr_type);
                } else {
                    alert("Google maps ei löytänyt osoitetta: " + status);
                }
            });
        }
    }

    function ResetMap() {
        map.setZoom(6);
        map.setCenter(new google.maps.LatLng(62.576083, 26.031889));

        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
        markers.length = 0;

        for (var i = 0; i < infowindows.length; i++) {
            infowindows[i].setMap(null);
        }
        infowindows.length = 0;
    }

    function ShowLocationOnMap(latlng, address, addr_type) {
        var zoom = 12;
        switch (addr_type) {
            case "administrative_area_level_1": zoom = 6; break;
            case "locality": zoom = 10; break;
            case "postal_code": zoom = 11; break;
            case "street_address": zoom = 15; break;
        }
        map.setZoom(zoom);

        marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: address
        });

        markers.push(marker);

        var contentString = "<b>" + address + "</b>";
        infowindow = new google.maps.InfoWindow({ content: contentString });
        infowindow.open(map, marker);

        infowindows.push(infowindow);

        map.setCenter(latlng);
    }
});