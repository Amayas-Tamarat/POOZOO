<?php

use LDAP\Result;

class Employee{
    private int $age;
    private string $name;
    private string $sexe;
    
    public function __construct
    (
        int $age,
        string $name,
        string $sexe,
    ) 
    {
        $this->name = $name;
        $this->age = $age;
        $this ->sexe = $sexe;

    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function feed(AbstractAnimal $animal): string 
    {
        $result = $animal->eat();
        return $result;
    }

    public function cleaning(AbstractEnclos $enclos)
    {
        $result = $enclos->clean();
        return $result;
    }
}