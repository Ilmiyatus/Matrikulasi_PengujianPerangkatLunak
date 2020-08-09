<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Wordcount.php";

// Class untuk run Testing.
class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        
        $Wc = new WordCount();
        
        $TestSentence = "My name is Ilmiyatus Sadiah"; // 4 Kata ..
        $WordCount = $Wc->countWords($TestSentence);

        $this->assertEquals(5, $WordCount);

    }
}