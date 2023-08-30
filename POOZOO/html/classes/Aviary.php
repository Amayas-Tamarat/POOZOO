<?php
 class Aviary extends AbstractEnclos{

    private int $height;

    public function __construct(
        string $name,
        int $cleanliness,
        int $nbOfAnimals,
        array $animals,
        int $height
    ) {
        parent::__construct($name, $cleanliness, $nbOfAnimals, $animals);
        $this->height = $height;
    }


    /**
     * Get the value of height
     */ 
    public function getHeight():int
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight(int $height):self
    {
        $this->height = $height;

        return $this;
    }
 }