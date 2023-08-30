<?php
require_once('./connect/autoload.php');

$employee = new Employee(12,'jean','male');
$tiger = new Bear("Tigger", 150, 5, "Roar");
$tigerEnclos = new Enclos("Tiger Enclosure", 80, 0, []);
$tigerEnclos2 = new Enclos ("tiger", 123, 0, []);


var_dump($tigerEnclos);
echo $tigerEnclos->addAnimal($tiger);
var_dump($tigerEnclos);
$animals = $tigerEnclos->getAnimals();
var_dump($animals);
echo $tigerEnclos->removeAnimal($animals, $tiger);
var_dump($animals);
$tigerEnclos->setAnimals($animals);
var_dump($tigerEnclos);
echo $employee->cleaning($tigerEnclos);
