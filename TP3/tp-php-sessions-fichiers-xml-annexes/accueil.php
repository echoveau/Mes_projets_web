<?php 
	session_start();
	
    $_SESSION["nom"]=array();
    $_SESSION["age"]=array();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<title>TP 4 - PHP - Inscriptions</title>
</head>
<body style="background-color: #ffcc00;">
	<a href="employee_form.php">Employés</a>
	
<?php 
    $emp=fopen("employees.csv","r+");
    echo "</br>";
    echo " <style>table,td,th	{border: 1px solid black;width:200px;text-align: center;}</style><table>
            <tr><td> NOM</td></tr> ";
        
    while(($data = fgetcsv($emp,1000 ,";")) !== FALSE){
        array_push($_SESSION["nom"],$data[0]);
        array_push($_SESSION["age"],$data[2]);
        echo "<tr><td> <a href='get_employee.php?nom=".$data[0]."&age=".$data[2]."'>".$data[0]."</a></td></tr>";
    }
    echo "</table>"

?>	
</body>
</html>
