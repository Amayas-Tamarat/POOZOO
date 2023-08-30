<?php
class Aquarium extends AbstractEnclos{
    private int $saltiness;

    public function __construct(
        string $name,
        int $cleanliness,
        int $nbOfAnimals,
        array $animals,
        int $height
    )
    {
        parent::__construct($name,$cleanliness,$nbOfAnimals,$animals);
        $this->saltiness = $height;
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