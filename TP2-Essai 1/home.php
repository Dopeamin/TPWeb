<?php
include_once 'isAuthenticated.php';
$pageTitle = 'home';
include_once 'fragments/header.php';
?>
<?php
        if (isset($_SESSION['errorMessage'])) {

    ?>
            <div class="alert alert-danger">
                <?= $_SESSION['errorMessage'] ?>
            </div>
    <?php
            unset($_SESSION['errorMessage']);
        }
    ?>
<div class="alert alert-success">
    Bienvenu chez vous
</div>
<?php
include_once("personnesList.php");
include_once("personneAjout.php");
?>
</body>
</html>
