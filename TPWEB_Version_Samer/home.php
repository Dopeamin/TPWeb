<?php
include_once 'autoload.php';

session_start();
if(!isset($_SESSION['user'])){

    header('location:login.php');
}
    $bd = BDuser::getInstance();
    $req= "select * from etudiant";
    $reponse =$bd-> query($req);
    $pers = $reponse->fetchAll(PDO::FETCH_OBJ );

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href = "node_modules/bootswatch/dist/lux/bootstrap.css">

    <title>Document</title>
</head>
<body>

<?php  if(isset($_SESSION['user']))
{
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>



    </ul>
    </div>
    </nav>




<div class="container">

<div class="alert alert-sucesss">
    Bienevenu !! votre listes de personnes:
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">nom</th>
        <th scope="col">prenom</th>
        <th scope="col">age</th>
        <th scope="col">section</th>
        <th scope="col">photo</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($pers as $personne) {
        ?>
        <tr>
            <td><?= $personne->NOM ?></td>
            <td><?= $personne->PRENOM ?></td>
            <td><?= $personne->AGE ?></td>
            <td><?= $personne->SECTION ?></td>
            <td><img style="width:150px" src="classes+pictures/pictures/<?= $personne->picture?>"/></td>

        </tr>
        <?php
   }

    ?>

    </tbody>
</table>
<form action="delete.php"
      method="post">
    <div class="form-group">
        <label for="exampledelete">Enter a name of a person u want to delete</label>
        <input
                type="text"
                name="deletebyname"
                class="form-control"
                id="exampledelete"
                placeholder="name of a person"
    </div>
    <button  class="btn btn-primary">delete</button>
</form>
    <br><br><br><br>

    <div name="ajt">
    <form action="ajouteruser.php" enctype="multipart/form-data"
          method="post">
        <div class="form-group">
            <label for="nom">Enter the name of the person u want to add</label>
            <input
                    type="text"
                    name="ajoutname"
                    class="form-control"
                    id="exampleajout"
                    placeholder="the name of the person"
            <label for="prenom">Enter the first name of the person u want to add</label>
            <input
                    type="text"
                    name="ajoutprenom"
                    class="form-control"
                    id="exampleajout"
                    placeholder="the first  name of the person"
            <label for="age">Enter the age of the person u want to add</label>
            <input
                    type="text"
                    name="ajoutage"
                    class="form-control"
                    id="exampleajout"
                    placeholder="the age of the person"
            <label for="section">Enter the study field of the person u want to add</label>
            <input
                    type="text"
                    name="ajoutsection"
                    class="form-control"
                    id="exampleajout"
                    placeholder="SECTION"

        </div>
        <button  class="btn btn-primary">ajouter</button>
    </form>
</div>
    <br><br><br><br>
<div name="change">
    <form action="change.php" enctype="multipart/form-data"
          method="post">
        <div class="form-group">
            <label for="nom">Enter the name of the person u want to change his info</label>
            <input
                    type="text"
                    name="curname"
                    class="form-control"
                    placeholder="the name of the person"
            <label for="nom">enter new name</label>
            <input
                    type="text"
                    name="changename"
                    class="form-control"
                    placeholder="new name"
            <label for="prenom">Enter new firstname</label>
            <input
                    type="text"
                    name="changeprenom"
                    class="form-control"
                    placeholder="new first name"
            <label for="age">Enter new age</label>
            <input
                    type="number"
                    value=0
                    name="changeage"
                    class="form-control"
                    placeholder="new age "
            <label for="section">Enter new study field </label>
            <input
                    type="text"
                    name="changesection"
                    class="form-control"
                    placeholder="the new study field"
            <label for=""image>Select image to upload:</label>
            <input type="file" name="changepic" id="fileToUpload">
        </div>
        <button type="submit" class="btn btn-primary">modifier</button>
    </form>
</div>
</div>



</body>
</html>


<?php }?>