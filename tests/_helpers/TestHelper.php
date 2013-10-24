<?php
namespace Codeception\Module;

// here you can define custom functions for TestGuy 

class TestHelper extends \Codeception\Module
{
    function haveInSession($name, $value)
    {
        $di = \Phalcon\Di::getDefault();
        if ($di) {
            $di->get('session')->set($name, $value);
        }
    }
}
