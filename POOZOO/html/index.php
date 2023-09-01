<?php
require_once('./connect/autoload.php');
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
    } elseif ($formType === 'hire_employee') {
        $createdEmployee = $zooRepository->createEmployee($_SESSION['created_zoo']);
        if ($createdEmployee) {
            echo "Employee hired : " . $createdEmployee->getName() . "<br>";
        }
    } elseif ($formType === 'create_animal') {
        $createdAnimal = $zooRepository->CreateAnimals();
        if ($createdAnimal) {
            $createdAnimals = $_SESSION['created_animals'] ?? [];
            $createdAnimals[] = $createdAnimal;
            $_SESSION['created_animals'] = $createdAnimals;
            echo "Animal created : " . $createdAnimal->getName() . "<br>";
        }
    }
    $createdZoo  = $_SESSION['created_zoo'];
    $createdAnimals = $_SESSION['created_animals'] ?? [];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Create Zoo</title>
</head>

<body>
    <h1>Zoo</h1>
    <form action="" method="post">
        <input type="hidden" name="form_type" value="create_zoo">
        Name: <input type="text" name="zoo_name"><br><br>
        <input type="submit" value="Create Zoo">
    </form>
    <h1>Employee</h1>
    <form action="" method="post">
        <input type="hidden" name="form_type" value="hire_employee">
        Name: <input type="text" name="employee_name"><br>
        Age: <input type="number" name="employee_age"><br>
        Gender:
        <input type="radio" name="employee_gender" value="male"> Male
        <input type="radio" name="employee_gender" value="female"> Female<br>
        <input type="submit" value="Hire Employee">
    </form>
    <h1>Enclosure</h1>
    <form method="POST" action="">
        <input type="hidden" name="form_type" value="create_enclosure">
        <label for="enclosure_type">Select Enclosure Type:</label>
        <select name="enclosure_type">
            <option value="Enclos">Basic Enclos</option>
            <option value="Aquarium">Aquarium</option>
            <option value="Aviary">Aviary</option>
        </select>
        <br>
        <label for="name">Enclosure Name:</label>
        <input type="text" name="name" required>
        <br>
        <button type="submit">Create Enclosure</button>
    </form>
    <h1>Animal</h1>
    <form method="POST" action="">
        <input type="hidden" name="form_type" value="create_animal">
        <label for="animal_type">Select Animal Type:</label>
        <select name="animal_type">
            <option value="Eagle">Eagle</option>
            <option value="Bear">Bear</option>
            <option value="Tiger">Tiger</option>
        </select>
        <br>
        <label for="animal_name">Animal Name:</label>
        <input type="text" name="animal_name" required>
        <br>
        <label for="animal_weight">Animal Weight:</label>
        <input type="number" name="animal_weight" required>
        <br>
        <label for="animal_age">Animal Age:</label>
        <input type="number" name="animal_age" required>
        <br>
        <label for="animal_noise">Animal Noise:</label>
        <input type="text" name="animal_noise" required>
        <br>
        <button type="submit">Create Animal</button>
    </form>
    <h1>Add Animal to Enclosure</h1>
    <form method="POST" action="">
        <input type="hidden" name="form_type" value="add_animal_to_enclosure">
        <label for="animal_select">Select Animal:</label>
        <select name="animal_select">
            <?php foreach ($createdAnimals as $animal) { ?>
                <option value="<?php echo $animal->getName(); ?>"><?php echo $animal->getName(); ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="enclosure_select">Select Enclosure:</label>
        <select name="enclosure_select">
            <?php foreach ($createdEnclosures as $enclosure) { ?>
                <option value="<?php echo $enclosure->getName(); ?>"><?php echo $enclosure->getName(); ?></option>
            <?php } ?>
        </select>
        <br>
        <button type="submit">Add Animal to Enclosure</button>
    </form>
    <?php
    $createdZoo  = $_SESSION['created_zoo'];
    $createdAnimals = $_SESSION['created_animals'] ?? [];
    var_dump($createdZoo);
    echo "Created Animals:<br>";
    foreach ($createdAnimals as $animal) {
        var_dump($animal);
    }
    ?>
</body>

</html>