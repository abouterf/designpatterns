<?php

/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 14:38
 */

use Rpodwika\Designpatterns\Antipatterns\Singleton;
use Rpodwika\Designpatterns\Antipatterns\SingletonSample;

class SingletonTest extends PHPUnit_Framework_TestCase
{
    public function testSingletonReturnsObject()
    {
        $singletonObject = Singleton::getInstance();
        $this->assertTrue(is_object($singletonObject));
        $this->assertNotNull($singletonObject);
        $this->assertInstanceOf('Rpodwika\Designpatterns\Antipatterns\Singleton', $singletonObject);
    }

    public function testDoSomethingReturnsProperObject()
    {
        $this->assertEquals('I do something', Singleton::getInstance()->doSomething());
    }

    public function testSingletonTrait()
    {
        $object = SingletonSample::getInstance();

        $this->assertNotNull($object);
        $this->assertEquals('I do something', $object->doSomething());

    }
}