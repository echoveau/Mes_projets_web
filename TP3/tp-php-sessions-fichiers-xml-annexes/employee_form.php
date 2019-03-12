<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<title>TP 4 - PHP - Inscription d'employés</title>
</head>
<body style="background-color: #ffcc00;">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<fieldset>
<legend><b>Inscrire un employé</b></legend>
<label>Nom :&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="nom" value="" size="30" maxlength="60" required="required"/><br/><br/>
<label>Salaire :&nbsp;</label>
<input type="number" name="salaire" min="0" max="100000" step="5000" size="6" required="required"/><br/><br/>
<label>Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="number" name="age" min="18" max="100" size="6" required="required"/><br/><br/>
<input type="submit" value="Inscrire" name="inscrire" />
</fieldset>
</form>
<a href="accueil.php">Retour à l'accueil</a>

<?php    
    $affiche=false;    

    function existedeja($nom,$age){
        if(count($_SESSION["nom"])>0)
            for($i=0;$i< count($_SESSION["nom"]);$i++){
               if($_SESSION["nom"][$i]==$nom && $_SESSION["age"][$i]==$age)
                    return true;
            }

        return false;
    }
    
    $emp=fopen("employees.csv","a+");
    
    if(isset($_POST["nom"]) && isset($_POST["salaire"]) && isset($_POST["age"])){
        
        if(!existedeja($_POST["nom"],$_POST["age"]))  {
            flock($emp, LOCK_EX);
            fwrite($emp,$_POST["nom"].";".$_POST["salaire"].";".$_POST["age"]."\n");
            flock($emp, LOCK_UN);
            array_push($_SESSION["nom"],$_POST["nom"]);
            array_push($_SESSION["age"],$_POST["age"]);
            $affiche=true;
        }
        else{
            echo "</br> <h2>Cet individu existe déjà</h2>";
        }

    }
    
    fclose($emp);
     
    if($affiche){
        $emp=fopen("employees.csv","a+");
        
        echo "  <style>table,td,th	{border: 1px solid black;border-collapse: collapse;width:600px;text-align: center;}</style>
        <table>
            <tr>
                <td>ID</td>
                <td>NOM</td>
                <td>SALAIRE</td>
                <td>AGE</td>
            </tr>";
        
        $compteur=1;
            while(($data = fgetcsv($emp,1000 ,";")) !== FALSE){
                echo"<tr>";
                echo "<td>".$compteur."</td>
                      <td>".$data[0]."</td>
                      <td>".$data[1]."</td>
                      <td>".$data[2]."</td>
                ";
                $compteur++;
                echo"</tr>";
            }       
        echo "</table>";
        
    }
?>

</body>
</html>
