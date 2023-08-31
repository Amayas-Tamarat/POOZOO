<?php
require_once('./connect/autoload.php');

// $zoo = new Zoo('test');
// $employee = new Employee(12,'jean','male');
// $tiger = new Bear("Tigger", 150, 5, "Roar");
// $tigerEnclos = new Enclos("Tiger Enclosure");
// $tigerEnclos2 = new Enclos ("tiger");
// var_dump($zoo);
// echo $zoo->addEnclosInZoo($tigerEnclos);
// echo $zoo->addEmployeeInZoo($employee);
// var_dump($zoo);
// var_dump($tigerEnclos);
// echo $tigerEnclos->addAnimal($tiger);
// var_dump($tigerEnclos);
// $animals = $tigerEnclos->getAnimals();
// var_dump($animals);
// echo $tigerEnclos->removeAnimal($animals, $tiger);
// var_dump($animals);
// $tigerEnclos->setAnimals($animals);
// var_dump($tigerEnclos);
// echo $employee->cleaning($tigerEnclos) .'<br>';
// echo $tigerEnclos->displayAllEncloInfos();

?>
<?php
$zooRepository = new ZooRepository();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formType = $_POST['form_type'];

    if ($formType === 'create_zoo') {
        $createdZoo = $zooRepository->createZoo();
        if ($createdZoo) {
            $_SESSION['created_zoo'] = $createdZoo;
            echo "Zoo created: " . $createdZoo->getName() . "<br>";
        }
    } elseif ($formType === 'create_enclosure') {
        $createdEnclos = $zooRepository->createEnclos($_SESSION['created_zoo']);
        if ($createdEnclos) {
            echo "Enclosure created: " . $createdEnclos->getName() . "<br>";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Zoo</title>
</head>
<body>
    <h1>Create a Zoo</h1>
    <form action="" method="post">
        <input type="hidden" name="form_type" value="create_zoo">
        Name: <input type="text" name="zoo_name"><br><br>
        <input type="submit" value="Create Zoo">
    </form>

    <h1>Create Enclosure</h1>
    <form method="POST" action="">
        <input type="hidden" name="form_type" value="create_enclosure">
        <label for="enclosure_type">Select Enclosure Type:</label>
        <select name="enclosure_type">
            <option value="Aquarium">Aquarium</option>
            <option value="Aviary">Aviary</option>
            <!-- You can add more options here for other enclosure types -->
        </select>
        <br>
        <label for="name">Enclosure Name:</label>
        <input type="text" name="name" required>
        <br>
        <!-- Additional fields specific to each enclosure type can be added here -->
        <button type="submit">Create Enclosure</button>
    </form>
    <?php 
     $createdZoo  = $_SESSION['created_zoo'] ;
    var_dump($createdZoo);
    ?>
</body>
</html>


