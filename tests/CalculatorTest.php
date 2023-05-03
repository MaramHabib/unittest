<?php
use PHPUnit\Framework\TestCase;

require './src/Calculator.php';

class CalculatorTest extends TestCase
{
    public function testadd(){
        $c= new Calculator;
        $result = $c->add(4,6); 
        $this->assertEquals(10,$result);
    }
}