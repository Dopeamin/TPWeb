<?php
session_start();
if(isset($_SESSION['user']))        header('location:home.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href = "node_modules/bootswatch/dist/yeti/bootstrap.css">

    <title>Document</title>
</head>
<body>


<div class="container">
    <?php  if(isset($_SESSION['error'])){ ?>
    <div class="alert alert-danger">  <?php echo $_SESSION['error'] ?>  </div>
    <?php         unset($_SESSION['error']); } ?>

    <div>SIGN IN</div>
<form action ="processLogin.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email"
               type="email"
               class="form-control"
               id="exampleInputEmail1"
               aria-describedby="emailHelp"
               placeholder="Enter email"

        ></div>

    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input
                type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mdp">
    </div>
    <button type="submit" class="btn btn-primary">SIGN IN</button>
</form>


<br><br>
<div>SIGN UP</div>

    <form action ="processADDUSER.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input
                   type="email"
                   class="form-control"
                   id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="Enter email"
                   name="ad" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input
                    type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mp1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"> Repeat Password</label>
            <input
                    type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mp">
        </div>
        <button type="submit" class="btn btn-primary">SIGN UP</button>
    </form>
</div>

</body>
</html>