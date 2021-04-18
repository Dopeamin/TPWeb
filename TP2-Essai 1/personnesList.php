<?php
include_once 'autoload.php';
$personneRepository = new PersonneRepository();
$personnes = $personneRepository->findAll();
include_once 'fragments/header.php';
?>

<table class="table">
    <tr>
        <th>Firstname</th>
        <th>Name</th>
        <th>Age</th>
        <th>Picture</th>
    </tr>
    <?php foreach ($personnes as $personne) {
    ?>
    <tr>
        <td><?= $personne->userName ?></td>
        <td><?= $personne->userEmail ?></td>
        <td><?= $personne->age ?></td>
        <td><img style="width:200px" src="images/<?= $personne->picture?>"/></td>
        <td class="btn"><a href="delete.php?email=<?= $personne->userEmail ?>">Delete</td>
        <td class="btn"><a href="modify.php?email=<?= $personne->userEmail ?>">Modify</td>
    </tr>
    <?php
    }
    ?>
</table>

</body>
</html>