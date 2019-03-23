<?php 
    $xml=simplexml_load_file('temperatures.xml');

    $tab=array();
    foreach($xml->month as $month){
        $mois = (string) $month['name'];
        $valeur =(float) $month['value'];
        
        array_push($tab,[$mois,$valeur]);
    }

    echo json_encode($tab);

?>