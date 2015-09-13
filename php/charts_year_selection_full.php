<?php
    $year_0 = date("Y");
    $year_1 = $year_0 - 1;
    $year_2 = $year_1 - 1;
    $year_3 = $year_2 - 1;
    $year_4 = $year_3 - 1;
    $year_5 = $year_4 - 1;
?>
                            <div class="year-selection right">
                                <span>Vuodet:</span>
                                <input type="checkbox" name="year_0" value="<?php echo $year_0 ?>" checked/><?php echo $year_0 ?>
                                <input type="checkbox" name="year_1" value="<?php echo $year_1 ?>" checked/><?php echo $year_1 ?>
                                <input type="checkbox" name="year_2" value="<?php echo $year_2 ?>" checked/><?php echo $year_2 ?>
                                <input type="checkbox" name="year_3" value="<?php echo $year_3 ?>" checked/><?php echo $year_3 ?>
                                <input type="checkbox" name="year_4" value="<?php echo $year_4 ?>" checked/><?php echo $year_4 ?>
                                <input type="checkbox" name="year_5" value="<?php echo $year_5 ?>" checked/><?php echo $year_5 ?>
                            </div>