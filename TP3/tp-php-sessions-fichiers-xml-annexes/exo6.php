<?php
if (isset($_POST['fond']) && isset($_POST['texte']))
    {
        ajout();
    }

    function ajout(){
        setcookie("fond",$_POST['fond'],time()+20);
        setcookie("texte",$_POST['texte'],time()+20);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<title>TP 4 - PHP - Inscriptions</title>
    <style type="text/css">
        body {
            background-color: <?= $_COOKIE['fond']; ?>;
            color: <?= $_COOKIE['texte']; ?>;
        }
    </style>
</head>
<body>
	<form method="post" action="exo6.php">
		<fieldset>
			<legend>Choisissez vos couleurs (mot clé ou code)</legend>
			<label>Couleur de fond <input type="text" name="fond">
			</br>
			Couleur de texte <input type="text" name="texte">
			</br>
			<input type="submit" value="envoyer">
			<input type="reset" value="effacer">			
			
	    </fieldset>	
	</form>

</body>
</html>