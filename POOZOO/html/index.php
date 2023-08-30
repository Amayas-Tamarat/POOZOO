<?php
require_once('./connect/autoload.php');

$employee = new Employee(12,'jean','male');
$tiger = new Bear("Tigger", 150, 5, "Roar");
$tigerEnclos = new Enclos("Tiger Enclosure", 80, 0, []);
$tigerEnclos2 = new Enclos ("tiger", 123, 0, []);

var_dump($tiger);
var_dump($employee);
var_dump($tigerEnclos);
var_dump($tigerEnclos2);


echo $tigerEnclos->addAnimal($tiger);
var_dump($tigerEnclos);
echo $employee->feed($tiger);
echo $employee->cleaning($tigerEnclos);
