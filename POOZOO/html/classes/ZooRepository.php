<?php

class ZooRepository
{

    public function createZoo()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $zooName = $_POST['zoo_name'];
            $zoo = new Zoo($zooName);
            return $zoo; 
        }
        return null;
    }

    public function displayZooInfos(Zoo $zoo)
    {
        echo 'Name :' . $zoo->getName() . '<br>';
        echo 'Nombre d\'enclos :' . $zoo->getNumberOfEnclos();
    }

    public function createEnclos(Zoo $zoo)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $enclosureType = $_POST['enclosure_type'];
            $enclosureName = $_POST['name'];

            if ($enclosureType === 'Aquarium') {
                $enclosure = new Aquarium($enclosureName, 100, 0, [], 0);
            } elseif ($enclosureType === 'Aviary') {
                $enclosure = new Aviary($enclosureName, 100, 0, [], 0);
            }
        }
        $zoo->addEnclosInZoO($enclosure);
        return $enclosure;
    }

    public function createEmployee(Zoo $zoo)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $employeeName = $_POST['employee_name'];
            $employeeAge = $_POST['employee_age'];
            $employeeGender = $_POST['employee_gender'];
            $employee = new Employee($employeeAge, $employeeName, $employeeGender);
            $zoo->addEmployeeInZoo($employee);
            return $employee;
        }
    }


    public function CreateAnimals()
    {
        $animalType = $_POST['animal_type'];
        $animalName = $_POST['animal_name'];
        $animalWeight = $_POST['animal_weight'];
        $animalAge = $_POST['animal_age'];
        $animalNoise = $_POST['animal_noise'];
        switch ($animalType) {
            case 'Eagle':
                $animal = new Eagle($animalName, $animalWeight, $animalAge, $animalNoise);
                break;
            case 'Bear':
                $animal = new Bear($animalName, $animalWeight, $animalAge, $animalNoise);
                break;
            case 'Tiger':
                $animal = new Tiger($animalName, $animalWeight, $animalAge, $animalNoise);
                break;
        }
        return $animal;
}

}
