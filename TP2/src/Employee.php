<?php
require("IEmployee.php");

class Employee implements IEmployee
{
    private $_id;
    private $_name;
    private $_salary;
    private $_age;
 
    
    public function __construct($id, $name, $salary, $age){
        $this->_id=$id;
        $this->_name=$name;
        $this->_salary=$salary;
        $this->_age=$age;
    }
    
    
    public function getId(){
        return $this->_id;
    }
    public function getName(){
        return $this->_name;
    }
    public function getSalary(){
        return $this->_salary;
    }
    public function getAge(){
        return $this->_age;
    }
    public function setId($id){
        $this->_id=$id;
    }
    public function setName($name){
        $this->_name=$name;
    }
    public function setSalary($salary){
        $this->_salary=$salary;
    }
    public function setAge($age){
        $this->_age=$age;
    }
    public function __toString(){
        return "id=".$this->_id." name=".$this->_name." salary=".$this->_salary." age=".$this->_age;
    }
}

?>