<?php

class ZooRepository{

    public function createZoo() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $zooName = $_POST['zoo_name'];
            $zoo = new Zoo($zooName);
            return $zoo; // Return the created Zoo instance
        }
        return null; // Return null if the form is not submitted
    }

    public function displayZooInfos(Zoo $zoo)
    {
        echo 'Name :'.$zoo->getName().'<br>';
        echo 'Nombre d\'enclos :'.$zoo->getNumberOfEnclos();
    }

    public function createEnclos(Zoo $zoo)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $enclosureType = $_POST['enclosure_type'];
            $enclosureName = $_POST['name'];

            // Create the appropriate enclosure instance based on selected type
            if ($enclosureType === 'Aquarium') {
                $enclosure = new Aquarium($enclosureName, 100, 0, [], 0); // Provide appropriate arguments
            } elseif ($enclosureType === 'Aviary') {
                $enclosure = new Aviary($enclosureName, 100, 0, [], 0); // Provide appropriate arguments
            }
        }
        $zoo->addEnclosInZoO($enclosure);
        return $enclosure;
    }
}
