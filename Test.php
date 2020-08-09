<?php

use PHPUnit\Framework\TestCase;

require_once "Employee.php";
require_once "Wordcount.php";

class Test extends TestCase
{
    /** @test */
    public function shouldCreateObject()
    {
        $id = 1;
        $name = 'Ilmiyatus Sadiah';
        $basicSalary = 10000000;

        $obj = new Employee(
            $id,
            $name,
            $basicSalary
        );

        $this->assertEquals($id, $obj->getId());
        $this->assertEquals($name, $obj->getName());
        $this->assertEquals($basicSalary, $obj->getBasicSalary());
    }

    public function testCountWords()
    {
        $Wc = new WordCount();
 
        $TestSentence = "My name is Ilmiyatus Sadiah"; 
        $WordCount = $Wc->countWords($TestSentence);

        $this->assertEquals(5, $WordCount); 
    }
}