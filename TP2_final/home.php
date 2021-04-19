<?php
include_once 'isLoginBefore.php';
$pagetitle='home';
include_once 'frag/script.php';
?>
<?php

include_once 'autoload.php';
$p=new PersonnesRepository();
$res=$p->findAll() ;
?>
<div class="alert alert-sucesss">
Bienevenu chez nous voici votre listes de personnes:
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
    <?php foreach ($res as $personne) {
        ?>
        <tr>
            <td><?= $personne->nom ?></td>
            <td><?= $personne->prenom ?></td>
            <td><?= $personne->age ?></td>
            <td><?= $personne->section ?></td>
            <td><img style="width:200px" src="classes+pictures/pictures/<?= $personne->picture?>"/></td>
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
<div name="ajt">
   <form action="ajout.php" enctype="multipart/form-data"
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
                placeholder="the study field of the person"
        <label for=""image>Select image to upload:</label>
        <input type="file" name="ajoutpic" id="fileToUpload">
    </div>
    <button  class="btn btn-primary">ajouter</button>
  </form>
</div>
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
</body>
</html>
