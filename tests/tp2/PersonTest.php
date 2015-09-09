<?php

namespace tests\tp2;

use tp2\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
	$person = new Person('toto');
	$this->assertEquals('toto',$this->getName());
}