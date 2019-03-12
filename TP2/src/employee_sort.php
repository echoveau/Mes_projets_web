<?php
    require("employee_display.php");

    uasort($array,'critere');
    
    function critere($a,$b){
        $sa = $a->getSalary();
        $sb = $b->getSalary();
        if($sa<$sb)
            return -1;
        else if ($sa>$sb)
            return 1;
        else return 0;
    }
    
    echo "<br>";
    array_walk($array, 'affiche');
?>