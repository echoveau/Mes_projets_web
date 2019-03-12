<?php 
    $emp=fopen("employees.csv","r+");
    $compteur=0;
    
    $str="<?xml version='1.0' encoding='UTF-8' ?> 
            <!DOCTYPE employees SYSTEM 'employees.dtd'>
            <employees> ";
    

    while(($data = fgetcsv($emp,1000 ,";")) !== FALSE){
        $str .= "<employee>
            <id>".$compteur."</id>
            <name>".$data[0]."</name>
            <salary>".$data[1]."</salary>
            <age>".$data[2]."</age>
            </employee>
        ";
        
        $compteur++;
    }    
    
    $str .= "</employees>";

?>