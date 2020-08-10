<?php

use PHPUnit\Framework\TestCase;

require_once "Employee.php";
require_once "Wordcount.php";
require_once "Stack.php";

class Test extends TestCase
{
    /** @test */
    public function shouldCreateObject()
    {
        $id = 1;
        $name = 'Ilmiyatus Sadiah';
        $basicSalary = 10000000;
        $date = '17/09/99';

        $obj = new Employee(
            $id,
            $name,
            $basicSalary,
            $date
        );

        $this->assertEquals($id, $obj->getId());
        $this->assertEquals($name, $obj->getName());
        $this->assertEquals($basicSalary, $obj->getBasicSalary());
        $this->assertEquals($date, $obj->getDate());
    }

    public function testCountWords()
    {
        $Wc = new WordCount();
 
        $TestSentence = "My name is Ilmiyatus Sadiah"; 
        $WordCount = $Wc->countWords($TestSentence);

        $this->assertEquals(5, $WordCount); 
    }

    public function testPushAndPop()
    {
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }
}
