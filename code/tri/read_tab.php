<?php

include 'tri_selection.php';

function read_tab($t){
    $n = count($t);
    for($i=0;$i<$n;$i++){
        echo $t[$i].'<br>';
    }
}

read_tab($t);
?>