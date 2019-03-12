<!DOCTYPE html>
<html>
<head>
<title>Fonction de création de formulaire</title>
</head>
<body>
<?php
require("form_generation.inc.php");
echo form("machin.php","post","Nom","nom","Abonné","abonn","oui","Envoi","Effacer");
echo form("truc.php","post","Loisirs","loisir","Amateur","amat","oui","Envoi","Effacer");
?>
</body>
</html>