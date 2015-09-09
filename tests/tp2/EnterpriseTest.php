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
		$this->entreprise->add($this->person);

	}

	public function testadd()
    {
       
    	//$this->entreprise->add($this->person);
    	$this->assertEquals(true,$this->entreprise->employ($this->person));
    }

    public function testremove()
    {
        //$this->entreprise->add($this->person);
        //$this->assertEquals(true,$this->entreprise->employ($this->person));
        $this->entreprise->remove($this->person);
        $this->assertEquals(false,$this->entreprise->employ($this->person));
    }

    /**
     * @return boolean
     */
    public function testemploy()
    {
    	$this->assertEquals(true, $this->entreprise->employ($this->person));
        

    }

}