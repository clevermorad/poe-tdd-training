<?php

namespace tests\tp1;

use tp1\ParameterBag;

class ParameterBagTest extends \PHPUnit_Framework_TestCase
{

    protected $bag; 

    public function setUp()
    {

        $this->bag = new ParameterBag(array('foo' => 'bar'));

    }

    public function testCount()
    {

        $this->assertEquals(1,$this->bag->count());
        $this->bag->set('bar','foo');
        $this->assertEquals(2,$this->bag->count());
    }

    public function testGet()
    {

        $this->assertEquals('bar', $this->bag->get('foo'));
        $this->assertEquals(null, $this->bag->get('pony'));
        $this->assertEquals('pink', $this->bag->get('pony', 'pink'));

        
    }

    public function testGetInt()
    {

        $this->assertSame((int)'bar', $this->bag->GetInt('bar'));

    }

    public function testSet()
    {

        $this->bag->set('toto','tata');
        $this->assertEquals(2,$this->bag->count());

    }

    public function testHas()
    {

        $this->assertTrue($this->bag->has('foo'));
        $this->assertFalse($this->bag->has('sdsdf'));

    }

    public function testRemove()
    {
        $this->assertTrue($this->bag->has('foo'));
        $this->bag->remove('foo');
        $this->assertFalse($this->bag->has('foo'));
        $this->assertEquals(0,$this->bag->count());

    }

    public function testAll()
    {

        
    }

    public function testKeys()
    {

    }

    public function testAdd()
    {

    }
}
