        <div id="order_and_quotation_modal" class="modal fade" role="dialog">
          <div class="modal-dialog  modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                <?php
                    if ($page == "accessories_quotations") {
                        include "accessories_quotation_table.php";
                    } else {
                        include "order_and_quotation_table.php"; 
                    } 
                ?>
              </div>
              <div class="modal-footer">
                <button id="modal-add" type="submit" value="Submit" class="btn btn-success">Lisää</button>
                <button id="modal-delete" type="button" class="btn btn-danger">Poista</button>
                <button id="modal-update" type="button" class="btn btn-success">Päivitä</button>
                <button id="modal-edit" type="button" class="btn btn-warning">Muokkaa</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Sulje</button>
                <div class="modal-deleteConfirmation">
                    <p>Haluatko varmasti poistaa tämän?</p>
                    <button id="modal-deleteConfirmation" type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                    <button id="modal-deleteCancel" type="button" class="btn btn-default">Peruuta</button>
                </div>
              </div>
            </div>
          </div>
        </div>