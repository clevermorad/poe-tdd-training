<?php

namespace tests\tp2;

use tp2\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
	protected $person;

	public function setUp()
	{
		$this->person = new Person('toto');
	}

	public function testGetName()
	{
		
	    $this->assertEquals('toto',$this->person->getName());
	}
}