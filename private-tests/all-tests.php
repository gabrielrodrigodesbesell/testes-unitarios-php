<?php
require '../simpletest-1.2.0/autorun.php';

class AllTest extends TestSuite{

    public function __construct()
    {
        $this->addFile('teste01.php');
        $this->addFile('teste02.php');
    }
}