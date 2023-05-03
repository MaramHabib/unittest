<?php
use PHPUnit\Framework\TestCase;

require './src/Factorial.php';

class FactorialTest extends TestCase
{
    public function testfact(){
        $c= new Factorial;
        $result1= $c->Fact(0); 
        $result2= $c->Fact(1);
        $result3= $c->Fact(5);
        $result4= $c->Fact(-3);
        $result5= $c->Fact(1.5);
        $result6= $c->Fact(false);
        $result7= $c->Fact('abc');
        $this->assertEquals(1,$result1);
        $this->assertEquals(1,$result2);
        $this->assertNull($result4);
        $this->assertNull($result5);
        $this->assertNull($result6);
        $this->assertNull($result7);
        
    }
}