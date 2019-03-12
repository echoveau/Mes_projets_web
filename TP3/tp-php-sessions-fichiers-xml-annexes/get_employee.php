<?php 
    include 'employees2xml.php';

    $xml= new SimpleXMLElement($str);
    
    foreach($xml->employee as $e){
        if($e->name = $_GET['nom'] && $e->age=$_GET['age'])
            echo $e->id." ".$_GET['nom']." ".$e->salary." ".$e->age;
    }
    
?>