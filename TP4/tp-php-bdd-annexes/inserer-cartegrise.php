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
				<b>Enregistrement d'un véhicule</b>
			</legend>
			<table>
				<tr>
					<td colspan="2"><b>Propriétaire</b></td>
				</tr>
<?php require_once ("select-proprietaire.php");?>
				<tr>
					<td colspan="2"><b>Voiture</b></td>
				</tr>
<?php require_once ("select-voiture.php");?>
				<tr>
					<td colspan="2"><b>Carte grise</b></td>
				</tr>
<?php require_once ("input-cartegrise.php");?>
				<tr>
					<td><input type="reset" value="Effacer" /></td>
					<td><input type="submit" name="enreg" value="ENREGISTRER"/></td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php

try {
    require_once ("js.php");

    if(isset($_POST['immat']) && $_POST['np']){
        
        $nompre=explode(";",$_POST['np']);
        
        //  nom=      $nompre[0]
        //prenom=   $nompre[1]

        $id=$pdo->query("SELECT id_pers FROM proprietaire WHERE nom='$nompre[0]' and prenom='$nompre[1]'");
        $record=$id->fetch();
      
        
        $chaine = 'INSERT INTO cartegrise VALUES(\''.$record[0].'\',\''.$_POST['immat'].'\',\''.$_POST['datecarte'].'\')';
        $res=$pdo->query($chaine);
    }
    
} catch (PDOException $e) {
    displayException($e);
}

?>
 </body>
</html>