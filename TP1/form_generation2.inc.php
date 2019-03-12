<?php
function formulaire($act,$meth){
    echo "<form action=$act method = $meth/>";
}

function text($nom,$value){
    echo "<input type = 'text' name=$nom, placeholder=$value />";
}

function case_option($id,$name,$value){
    echo "<input type = 'radio' id='$id' name=$name, value=$value >";
    echo "<label for=$id> $name </label>";
}

function envoyer($value){
    echo "<input type = 'submit' value=$value />";
}

function effacer($value){
    echo "<input type = 'reset' value=$value />";
}

function ferm_formulaire(){
    echo "</form>";
}
?>