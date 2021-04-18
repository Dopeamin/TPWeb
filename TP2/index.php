<?php
    include 'userInfos.php';
//    $testname = 'newVar';
//    $$testname = 'content of dynamic named var';
//    echo $newVar.'<br>';
//    for ($i=1; $i<5;$i++) {
//        $esm = "name$i";
//        $$esm = "name $i";
//        echo "${$esm} <br>";
//    }
//    function quiCest() {
//        echo "Je suis ${GLOBALS['name']} et ma section est ${GLOBALS['section']} <br>";
//    }
//    function quiCest2() {
//        global $studentName, $studentNameSection;
//        echo "Je suis $studentName et ma section est $studentNameSection <br>";
//    }
//
//quiCest();
//quiCest2();
//$x = 3.25;
//var_dump($x);
//settype($x, 'int');
//echo "x = $x <br>";
//phpinfo(INFO_VARIABLES);
// 02-07-1982
// => 02/07/1982
$chaine = "02-07-1982";
$result = explode('-', $chaine);
var_dump(implode("/",$result));
$str = "Un \'apostrophe\' en <strong>gras</strong>";
$str = htmlentities($str);
echo htmlentities($str);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aymen</title>
</head>
<body>

Bonjour <?= $name; ?>
</body>
</html>
