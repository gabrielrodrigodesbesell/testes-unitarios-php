<?php

class TestarSubtracao extends TestarSoma{
    public function subtrair($numero1,$numero2){
        return $numero1-$numero2;
    }
    public function testarSubtrair(){
        $this->assertIdentical($this->subtrair(10,23),10);
    }
}