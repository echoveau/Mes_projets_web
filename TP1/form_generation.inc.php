<?php

function form($act, $meth, $nom1, $nom2, $ab1, $ab2, $oui, $sub, $res){
    echo "<form action=$act method = $meth/>";
    echo "<input type = 'text' name=$nom1, placeholder=$nom2 />";
    echo "<input type = 'radio' id='$ab2' name=$ab1 placeholder=$ab2, value=$oui >";
    echo "<label for=$ab2> $ab1 </label>";
    echo "<input type = 'button' value=$sub />";
    echo "<input type = 'button' value=$res />";
    
    echo "</form>";
}

?>