<?php
require ("Employee.php");
require ("IManager.php");

class Manager extends Employee implements IManager {
    
    private $_employes;
    
    public function __construct($id, $name, $salary, $age){
        Employee::__construct($id, $name, $salary, $age);
        $this->_employes=array();
    }
    
    public function add($employeeId)
    {
        array_push($this->_employes,$employeeId);
    }

    public function getArrEmployeesId()
    {
        $tab = array();
        foreach($this->_employes as $values){
            array_push($tab,$values); 
        }
        return $tab;
    }
    
}




?>