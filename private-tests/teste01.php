<?php

class TestarSoma extends UnitTestCase {
    public function somar($numero1,$numero2){
        return $numero1+$numero2;
    }
    public function testarSomar(){
        $this->assertIdentical($this->somar("52t",15), 10);
    }
}
