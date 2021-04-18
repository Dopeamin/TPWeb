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
    <form action="modifyProcess.php" method="post" class="form-group" enctype="multipart/form-data">
    <input name="userName" value="<?= $user->username ?>" type="text" placeholder="User name">
    <input name="userEmail" value="<?= $user->useremail ?>" type="email" placeholder="Email">
    <input name="userPassword" value="<?= $user->userpassword ?>" type="password" placeholder="pass">
    <input name="age" type="number" value="<?= $user->age ?>" placeholder="18">
    <input name="image" value="images/<?= $user->picture ?>" type="file">
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
