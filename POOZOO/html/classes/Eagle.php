<?php
class Eagle extends AbstractAnimal{

    public function __construct
    (
        string $nom,
        float $weight,
        int $age,
        string $noise,
    ) 
    {
        parent::__construct($nom, $weight, $age, $noise );
    }


    public function fly()
    {
        return 'flap flap';
    }
}