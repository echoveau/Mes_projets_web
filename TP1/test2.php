<!DOCTYPE html>
<html>
<head>
<title>Fonction de création de formulaire</title>
</head>
<body>
<?php
require("form_generation2.inc.php");
echo formulaire("machin.php","post");
echo text("texte", "texte");
echo case_option("r", "radio", "Souscrire");
echo envoyer("envoyer");
echo effacer("OOOOOOHHH");
echo ferm_formulaire();
?>
</body>
</html>