<?php

include_once "OStringTest.php";
include_once "OArrayTest.php";
include_once "OObjectTest.php";
include_once "OChainableTest.php";
include_once "OReflectionTest.php";
include_once "OValidatorTest.php";

class AllTests
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('PHPUnit');
 
        $suite->addTestSuite("OStringTest");
        $suite->addTestSuite("OArrayTest");
        $suite->addTestSuite("OObjectTest");
        $suite->addTestSuite("OChainableTest");
        $suite->addTestSuite("OReflectionTest");
        $suite->addTestSuite("OValidatorTest");
 
        return $suite;
    }
}
