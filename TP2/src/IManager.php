<?php
require_once('IEmployee.php');

Interface IManager extends IEmployee {
    public function __construct($id, $name,$salary, $age);    
    public function add($employeeId);
    public function getArrEmployeesId();
}
?>