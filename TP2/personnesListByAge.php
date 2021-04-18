<?php
include_once 'autoload.php';
$age = $_GET['age'];
if (!isset($age)) {
    header('location:personnesList.php');
}
$bdd = ConnexionBD::getInstance();
$query = "select * from personne where age > ?";

$response = $bdd->prepare($query);
$response->execute([$age]);
$personnes = $response->fetchAll(PDO::FETCH_OBJ);

include_once 'fragments/header.php';
?>

<table class="table">
    <tr>
        <th>Firstname</th>
        <th>Name</th>
        <th>Age</th>
        <th>Job</th>
    </tr>
    <?php foreach ($personnes as $personne) {
    ?>
    <tr>
        <td><?= $personne->firstname ?></td>
        <td><?= $personne->name ?></td>
        <td><?= $personne->age ?></td>
        <td><?= $personne->job ?></td>
    </tr>
    <?php
    }
    ?>
</table>

</body>
</html>