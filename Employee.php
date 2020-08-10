<?php

class Employee
{
    private $id;
    private $name;
    private $basicSalary;
    private $date;

    public function __construct($id, $name, $basicSalary, $date)
    {
        $this->id = $id;
        $this->name = $name;
        $this->basicSalary = $basicSalary;
        $this->date = $date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBasicSalary()
    {
        return $this->basicSalary;
    }

    public function getDate()
    {
        return $this->date;
    }
}
