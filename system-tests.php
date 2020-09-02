<?php
require 'simpletest-1.2.0/autorun.php';
require 'sistema/System.php';

class SystemTests extends UnitTestCase{

    function testSomar(){
        $sistema = new System();
        $this->assertIdentical(
            $sistema->somar(1,2),
            '3'
        );
    }
    function testSubtrair(){
        $sistema = new System();
        $this->assertIdentical(
            $sistema->subtrair(1,2),
            3
        );
    }
}