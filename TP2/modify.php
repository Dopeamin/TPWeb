<?php
    include_once "autoload.php";
    include_once "isAuthenticated.php";
    include_once 'fragments/header.php';
    $email = $_GET['email'];
    if(isset($email)){
        $repo = new PersonneRepository();
        $user = $repo->getUserByEmail($email);
        if($user != null){
?>
    <form action="modifyProcess.php" method="post"  enctype="multipart/form-data" style="width:400px;margin:auto;">
    <div class="form-group">
    <label for="userName">User Name</label>
    <input id="userName" class="form-control" name="userName" value="<?= $user->username ?>" type="text" placeholder="Name">
    </div>
    <div class="form-group">
    <label for="userEmail">User Email</label>
    <input id="userEmail" class="form-control" name="userEmail" value="<?= $user->useremail ?>" type="email" placeholder="Email">
    </div>
    <div class="form-group">
    <label for="age">Age</label>
    <input id="age" class="form-control" name="age" type="number" value="<?= $user->age ?>" placeholder="18">
    </div>
    <div class="form-group">
    <label for="picture">Picture</label>
    <input id="picture" class="form-control" name="image" value="images/<?= $user->picture ?>" type="file"></br>
    </div>
    <button type="submit" class="btn btn-primary">Modify</button>
    
    </form>

<?php
        }else{
            header('location:home.php');
        }
    }else{
        header('location:home.php');
    }
?>
