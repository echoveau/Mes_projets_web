<?php
    echo "Avant augmentation :<br>";
    require("employee_display.php");
    
    function employee_raise($e){
        if(gettype($e)!='object'){
            throw new Exception('Le paramètre n’est pas un objet');
        }
        else{
            if(!($e instanceof Employee)){
                throw new Exception('Le paramètre n’est pas une instance de Employee');
            }
        }
        $e->setSalary($e->getSalary()*1.05);
    };
    
    echo "<br>";
    echo "Après augmentation :<br>";
    
    try {
        array_walk($array, 'employee_raise');
        array_walk($array, 'affiche');
    } catch(Exception $e){
        echo $e;
    }
    
    

?>
