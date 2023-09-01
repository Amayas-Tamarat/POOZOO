<?php
class Aquarium extends AbstractEnclos{
    private int $saltiness;

    public function __construct(
        string $name,
        int $cleanliness,
        int $nbOfAnimals,
        array $animals,
        int $saltiness
    )
    {
        parent::__construct($name,$cleanliness,$nbOfAnimals,$animals);
        $this->saltiness = $saltiness;
    }
    

    /**
     * Get the value of saltiness
     */ 
    public function getSaltiness(): int 
    {
        return $this->saltiness;
    }

    /**
     * Set the value of saltiness
     *
     * @return  self
     */ 
    public function setSaltiness(int $saltiness): self
    {
        $this->saltiness = $saltiness;

        return $this;
    }
}