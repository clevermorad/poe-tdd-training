<?php

namespace tp2;

use tp2\Person;

class Enterprise 
{

    public $listPerson = array();

    public function add(Person $person)
    {
       
      $this->listPerson[] = $person;

    }

    public function remove(Person $personToRemove)
    {

        foreach ($this->listPerson as $key => $value) {
           
            if($personToRemove === $value){

             unset($this->listPerson[$key]);  
             break;

            }
        }
    }

    /**
     * @return boolean
     */
    public function employ(Person $person)
    { 
       return in_array($person ,$this->listPerson);
    }
}