<?php
interface IEmployee {
    public function __construct($id, $name, $salary, $age);
    public function getId();
    public function getName();
    public function getSalary();
    public function getAge();
    public function setId($id);
    public function setName($name);
    public function setSalary($salary);
    public function setAge($age);
    public function __toString();
}
?>