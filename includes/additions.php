<?php
$sql_ = 'SELECT * FROM additions';
$tblAdditions = getData($sql_, "fetchAll");
?>
                <h4>Extra's (per persoon per dag)</h4>
                    <ul class="list-group list-group-flush">
                        <?php  
                        foreach($tblAdditions as $addition) { ?>
                            <li class="list-group-item"><?php echo $addition["addition_name"];?> &euro; <?php echo $addition["addition_price"];?></li>
                        <?php } //end foreach ?>
                    </ul>