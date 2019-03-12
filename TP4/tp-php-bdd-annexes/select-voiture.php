<?php 
    echo "<tr><td>Immatriculation  ";
    
    echo "<input type='texte' name='tx'>";
    echo "<input type='submit' name='valider' value='--Chercher les voitures--'>";
    
    if(isset($_POST['tx']) && isset($_POST['valider'])){
        echo "</br>";
        echo "Les voitures           <select name='immat'>";
        $sth = $pdo->query("SELECT immat FROM voiture WHERE immat LIKE '".$_POST['tx']."%'");
        while($record=$sth->fetch()){
            echo " <option value='$record[0]'>".$record[0]."</option>";
        }
        
        echo "</select>";
    }
    
    echo "</td></tr>";
?>
