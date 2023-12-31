<?php

abstract class AbstractEnclos
{
    protected string $name;
    protected int $cleanliness;
    protected int $nbOfAnimals;
    protected array $animals = [];

    public function __construct(string $name ) {
        $this->name = $name;
        $this->cleanliness = 100;
        $this->nbOfAnimals = 0;
        $this->animals = [];
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
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Get the value of cleanliness
     */
    public function getCleanliness()
    {
        return $this->cleanliness;
    }

    /**
     * Set the value of cleanliness
     *
     * @return  self
     */
    public function setCleanliness($cleanliness)
    {
        $this->cleanliness = $cleanliness;

        return $this;
    }

    /**
     * Get the value of nbOfAnimals
     */
    public function getNbOfAnimals()
    {
        return $this->nbOfAnimals;
    }

    /**
     * Set the value of nbOfAnimals
     *
     * @return  self
     */
    public function setNbOfAnimals($nbOfAnimals)
    {
        $this->nbOfAnimals = $nbOfAnimals;

        return $this;
    }

    /**
     * Get the value of Animals
     */
    public function getAnimals()
    {
        return $this->animals;
    }

    /**
     * Set the value of Animals
     *
     * @return  self
     */
    public function setAnimals(array $animals)
    {
        $this->animals = $animals;

        return $this;
    }

    public function displayAllEncloInfos()
    {
        echo $this->getName() .'<br>';
        echo $this->getCleanliness() .'<br>';
        echo $this->getNbOfAnimals() .'<br>';
    }

    public function isEmpty(): bool
    {
        if($this->getNbOfAnimals() == 0){
            return true;
        }
        return false;
    }

    public function clean(): string
    {
        $currentCleanliness = $this->getCleanliness();
        
        if ($currentCleanliness === 100) {
            return "L'enclos est déjà propre.";
        } elseif ($this->isEmpty())
         {
            if ($currentCleanliness < 100) {
                $this->setCleanliness(100);
                return "L'enclos a été nettoyé et est maintenant propre.";
            } else
             {
                return "Bien que l'enclos soit vide, il est déjà propre.";
            }
        } else
         {
            return "L'enclos ne peut pas être nettoyé, il n'est pas vide.";
        }
    }


    public function addAnimal(AbstractAnimal $animal): string
    {
        if ($this->nbOfAnimals < 6) {
            $this->animals[] = $animal;
            $this->nbOfAnimals++;
            return $animal->getName() . " ajouté à " . $this->name . ".\n";
        } else {
            return $this->name . " est déjà plein.\n";
        }
    }

    public function removeAnimal(array &$animals, AbstractAnimal $animalObject): string
    {
        $key = array_search($animalObject, $animals, true);
    
        if ($key !== false) {
            unset($animals[$key]);
            $this->setNbOfAnimals($this->getNbOfAnimals()-1);
            $this->setAnimals($animals);
            return "l'animal '{$animalObject->getName()}' a été retiré de l'enclos .";
        } else {
            return "l'animal '{$animalObject->getName()}' n'est pas dans l'enclos.";
        }
    }

    public function displayAllAnimalsInEnclosure(): string
    {
        $animalList = "";
        foreach($this->getAnimals() as $animal){
            $animalList .= "- ". $animal->displayAllInfo(). "\n";
        }
        return $animalList;
    }


}
