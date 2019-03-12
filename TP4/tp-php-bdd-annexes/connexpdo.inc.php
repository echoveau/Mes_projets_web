<?php 

    function connexpdo($nombase){
        $pdo = new PDO('mysql:host=localhost;dbname='.$nombase.';charset=utf8','root','94Sh4Z');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    
    /*
    $pdo=connexpdo("voitures");
    $sth=$pdo->query('SELECT * FROM voiture');
    
    while($record=$sth->fetch(PDO::FETCH_ASSOC)) {
        print_r($record);
        echo "</br>";
        echo "</br>";
    }
    */
?>
