<?php

function getNESProgressBarByScore($field_value) {
    if ($field_value < "50") { echo "nes-progress is-error";} 
    elseif ($field_value < "75") { echo "nes-progress is-warning";}
    elseif ($field_value < "90") { echo "nes-progress is-success";}
    else { echo "nes-progress is-primary";}
}

function getLaunchDateText($field_value) {
   
     echo $field_value;
}



?>