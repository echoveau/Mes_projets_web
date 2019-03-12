
<?php

require("Employee.php");

$e1 = new Employee(80, "Superman", 1.27, 1);
$e2 = new Employee(73, "Batman", 1, 2);
$e3 = new Employee(50, "Spiderman", 0.82, 3);

$array = array($e1,$e2,$e3);
array_walk($array, 'affiche');

function affiche($item){
    global $somme;
    global $nbemploye;
    $somme = $somme+$item->getSalary();
    echo "employee: ".$item->__toString();
    echo "</br>";
    $nbemploye++;
};

echo "mean salary = ".$somme/$nbemploye;
echo "</br>";

?>