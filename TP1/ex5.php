<!DOCTYPE html>
<html>
<head>
<title>Televersage</title>
</head>
<body>
<?php
    echo "<form action='ex2.php' method='post' enctype='multipart/form-data'>";
    
    echo "<fieldset>
                    <legend>Transférez un fichier ZIP</legend>";
    echo "<table>
                <style>
                table,td,th	{border: 1px solid black;border-collapse: collapse;width:600px;text-align: center;}
                #tdred   	{background-color: red;}
                </style>";
    
    
    echo"   <tr>
                <th>Choisissez un fichier</th>
                <th><input type='file' name='fich_envoye' accept='application/zip'></th>
            </tr>";
    echo "  <tr>
                <td></td>
                <td><input type='submit' value='ENVOI' name='submit'></td>
            </tr>";
    echo "</table></fieldset></form>";

    
    if (isset($_POST['submit']))
    {
        ajout();
    }
    function ajout(){
            echo "<div>";
            echo "<hr/>";
            echo "<b>Vous avez bien transféré le ficher </b>";
            echo "<hr/>";
            echo "Le nom du fichier est : ";
            echo $_FILES["fich_envoye"]["name"];
            echo "</br>";
            echo "<hr/>";
            echo "taille : ";
            echo $_FILES["fich_envoye"]["size"];
            echo "</br>";
            echo "</div>";
    }
?>
</body>
</html>