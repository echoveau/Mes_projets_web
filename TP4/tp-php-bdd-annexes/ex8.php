<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8" />
<title>Saisissez les caractéristiques du modèle</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" name="form1"
		method="post" enctype="application/x-www-form-urlencoded">
		<fieldset>
			<legend>
				<b>Coordonnées de la personne</b>
			</legend>
			<table>
				<tr>
					<td colspan="2"><b>Nom :	</b></td>
					<td><input type="text" name="nom" size="40" maxlength="30"/> </td>
				</tr>
				<tr>
					<td colspan="2"><b>Prenom :	</b></td>
					<td><input type="text" name="prenom" size="40" maxlength="30"/> </td>
				</tr>
				<tr>
					<td><input type="submit" name="enreg" value="Chercher"/></td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
require_once ("js.php");
require_once ("connexpdo.inc.php");

if(isset($_POST['nom']) && isset($_POST['prenom'])){
    $n = $_POST['nom'];
    $p = $_POST['prenom'];
    
    echo "<h2>Liste des véhicules de ".$n." ".$p."</h2>";
    
    try{
        $pdo=connexpdo("voitures");
        $sth = $pdo->query("SELECT immat,modele FROM modele NATURAL JOIN voiture NATURAL JOIN cartegrise NATURAL JOIN proprietaire WHERE nom='$n' and prenom='$p'");
        echo "<table border=1>";
        while($row=$sth->fetch()){
            echo "<tr><td>$row[0]</td>
                      <td>$row[1]</td>
                    </tr>";
        }
        echo "</table>";
        
    }catch (PDOException $e) {
        displayException($e);
    }

            
}

?>

 </body>
</html>