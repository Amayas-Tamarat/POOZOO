<?php
 class Zoo{
    private string $name;
    private array $enclosures;
    private int $numberOfEnclos;
    private array $employees;
    private int $numberOfEmployees;

    public function __construct(string $name) {
        $this->name = $name;
        $this->enclosures = [];
        $this->numberOfEnclos = 0;
        $this->employees = [];
        $this->numberOfEmployees = 0;
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
     * Get the value of enclosures
     */ 
    public function getEnclosures()
    {
        return $this->enclosures;
    }

    /**
     * Set the value of enclosures
     *
     * @return  self
     */ 
    public function setEnclosures($enclosures)
    {
        $this->enclosures = $enclosures;

        return $this;
    }

    
    /**
     * Get the value of numberOfEnclos
     */ 
    public function getNumberOfEnclos()
    {
        return $this->numberOfEnclos;
    }

    /**
     * Set the value of numberOfEnclos
     *
     * @return  self
     */ 
    public function setNumberOfEnclos($numberOfEnclos)
    {
        $this->numberOfEnclos = $numberOfEnclos;

        return $this;
    }
    /**
     * Get the value of employees
     */ 
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * Set the value of employees
     *
     * @return  self
     */ 
    public function setEmployees($employees)
    {
        $this->employees = $employees;

        return $this;
    }

    /**
     * Get the value of numberOfEmployee
     */ 
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * Set the value of numberOfEmployee
     *
     * @return  self
     */ 
    public function setNumberOfEmployees($numberOfEmployee)
    {
        $this->numberOfEmployees = $numberOfEmployee;

        return $this;
    }


    public function addEmployeeInZoo(Employee $employee): string
    {
        if ($this->getNumberOfEmployees() < 2) {
            $this->employees[] = $employee;
            $this->numberOfEmployees++;
            return $employee->getName() . " ajouté à " . $this->name . ".\n";
        } else {
            return $this->name . " est déjà plein.\n";
        }
    }

    public function addEnclosInZoo(AbstractEnclos $enclos): string
    {
        if ($this->getNumberOfEnclos() < 3) {
            $this->enclosures[] = $enclos;
            $this->numberOfEnclos++;
            return $enclos->getName() . " ajouté à " . $this->name . ".\n";
        } else {
            return $this->name . " est déjà plein.\n";
        }
    }

    public function displayAllEnclosInZoo(): string
    {
        $enclosList = "";
        foreach($this->getEnclosures() as $enclosure){
            $enclosList .= "- ". $enclosure->displayAllEncloInfos(). "\n";
        }
        return $enclosList;
    }



 }