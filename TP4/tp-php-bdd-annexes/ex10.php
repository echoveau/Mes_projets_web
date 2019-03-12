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
					<td colspan="2"><b>Marque et modèle :	</b></td>
					<td><input type="text" name="mm" size="40" maxlength="30"/> </td>
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

if(isset($_POST['mm'])){
    $m = $_POST['mm'];
    
    try{
        $pdo=connexpdo("voitures");
        $sth = $pdo->prepare("SELECT nom,prenom FROM proprietaire NATURAL JOIN cartegrise NATURAL JOIN voiture NATURAL JOIN modele WHERE modele=:modele");
        $sth->execute(array(':modele'=>$m));
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