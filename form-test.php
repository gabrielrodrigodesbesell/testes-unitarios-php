<?php
require 'simpletest-1.2.0/autorun.php';
require 'simpletest-1.2.0/web_tester.php';

class FormTest extends WebTestCase{
    function test(){
        $this->get('http://localhost/testes/sistema/Contato.php');
        $this->setField('fname','Gabriel Rodrigo');
        $this->setField('lname','Desbesell');
        $retorno = $this->clickSubmit('Submit');
        $this->assertEqual($retorno,'Enviado com sucesso');
        $this->back();
        $this->assertFieldByName('fname');
        $this->forward();
        $this->assertTitle('Bem-vindo');

    }
}

















