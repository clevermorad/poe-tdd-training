<?php

namespace tests\tp2;

use tp2\Enterprise;
use tp2\Person;

class EnterpriseTest extends \PHPUnit_Framework_TestCase
{
	protected $person;
	protected $entreprise;

	public function setUp()
	{
		$this->person = new Person('toto');
		$this->entreprise = new Enterprise();
	}

	public function testadd()
    {
       
    	$this->entreprise->add($person);
    }

    public function testremove()
    {
        // TO IMPLEMENT
    }

    /**
     * @return boolean
     */
    public function testemploy()
    {
        // TO IMPLEMENT
    }

}