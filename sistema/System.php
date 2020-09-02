<?php

class System {

    function somar($n1,$n2){
        if(is_numeric($n1) && is_numeric($n2)) {
            return $n1 + $n2;
        }
    }
    function subtrair($n1,$n2){
        if(is_numeric($n1) && is_numeric($n2)) {
            return $n1 - $n2;
        }
    }
}