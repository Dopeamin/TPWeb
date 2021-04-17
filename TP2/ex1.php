<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2</title>
</head>
<body>
    <style>
     form{
         text-align:center;
     }
     input{
         padding:10px;
     }
    </style>
    <form name="form" action="" method="get">
    <input type="text" name="subject" id="subject" placeholder="text">
    <?php $str = $_GET['subject']; 
        foreach (count_chars($str, 1) as $val => $value) {
            echo chr($val) . " occurre : $value fois" . "<br>";
         }
    ?>
    </form>
    
</body>
</html>