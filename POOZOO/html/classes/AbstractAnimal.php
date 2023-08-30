<?php 

abstract class AbstractAnimal {

    protected string $name;
    protected float $weight;
    protected int $age;
    protected string $noise;
    protected bool $isHungry = false;
    protected bool $isSick = false;
    protected bool $isSleeping = false;
    
    public function __construct
    (
        string $name,
        float $weight,
        int $age,
        string $noise,
    ) 
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->age = $age;
        $this ->noise = $noise;

    }



    /**
     * Get the value of nom
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge(): int 
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of isHungry
     */ 
    public function getIsHungry(): bool
    {
        return $this->isHungry;
    }

    /**
     * Set the value of isHungry
     *
     * @return  self
     */ 
    public function setIsHungry(bool $isHungry): self
    {
        $this->isHungry = $isHungry;

        return $this;
    }

    /**
     * Get the value of isSick
     */ 
    public function getIsSick(): bool
    {
        return $this->isSick;
    }

    /**
     * Set the value of isSick
     *
     * @return  self
     */ 
    public function setIsSick(bool $isSick): self
    {
        $this->isSick = $isSick;

        return $this;
    }

    /**
     * Get the value of isSleeping
     */ 
    public function getIsSleeping(): bool
    {
        return $this->isSleeping;
    }

    /**
     * Set the value of isSleeping
     *
     * @return  self
     */ 
    public function setIsSleeping(bool $isSleeping): self
    {
        $this->isSleeping = $isSleeping;

        return $this;
    }



    public function displayAllInfo()
    {
        echo $this->getName();
        echo $this->getWeight();
        echo $this->getAge();
        echo $this->getIsHungry();
        echo $this->getIsSick();
        echo $this->getIsSleeping();
    }

    public function eat():string
    {
        if ($this->getIsHungry())
        {
           $this->setIsHungry(false);
           return "Cet animal est nourri. ";
        }
            return  "cet animal n'a pas faim.";
    }


    
    public function heal():string 
    {
        if ($this->getIsSick())
        {
            $this->setIsSick(false);
           return "cet animal a été soigné. ";
        }
            return  "cet animal est en bonne santé. ";
    }


    public function sleep(): string
    {
        if ($this->getIsSleeping())
        {
            return  "il est deja endormie . ";
        }
        $this->setIsSleeping(true);
        return "cet animal dort. ";
    }
    
    
    public function noise():string
    {
        return $this->noise;
    }

}