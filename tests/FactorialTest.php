<?php
use PHPUnit\Framework\TestCase;

require './src/Factorial.php';

class FactorialTest extends TestCase
{
    public function testfact(){
        $c= new Factorial;
        $result1= $c->Fact(0); 
        $result2= $c->Fact(1);
        $this->assertEquals(1,$result1);
        $this->assertEquals(1,$result2);
    }
}