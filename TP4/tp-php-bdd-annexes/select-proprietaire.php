<?php 
require ("connexpdo.inc.php");

    $pdo=connexpdo("voitures");
    $sth = $pdo->query('SELECT nom,prenom FROM proprietaire');
    
    echo "<tr><td>Nom & prénom  ";
    echo "<select name='np'>";
    
    while($record=$sth->fetch()){
        echo "<option value=$record[0];$record[1]>$record[0] $record[1]</option>";
    }
    
    
    echo "</select>";
    echo "</td></tr>";
    
    
?>