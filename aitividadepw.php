<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo "<h1>atividade 1</h1>";

for( $e = 0; $e <= 10 ; $e++){
    
        echo "<p> $e</p>";
    }
    echo "<hr>";

    echo "<h1>atividade 2</h1>";

for( $e = 10; $e >= 1 ; $e--){
    
        echo "<p> $e</p>";
    }
    echo "<hr>";

    echo "<h1>atividade 3</h1>";

    $nota = array();
    $nota[0] = 10;
    $nota[1] = 7;
    $nota[2] = 9;
    $nota[3] = 8;
    $nota[4] = 3;
    $nota[5] = 2;
    $nota[6] = 6;
    $nota[7] = 4;
    $nota[8] = 9;
    $nota[9] = 3;
    $nota[10] = 8;
    $nota[11] = 6;
    $nota[12] = 9;
    $nota[13] = 5;
    $nota[14] = 6;
    $nota[15] = 4;
    $nota[16] = 7;
    $nota[17] = 9;
    $nota[18] = 4;
    $nota[19] = 0;

$soma = 0;

    foreach ($nota as $value){
        $soma += $value;
    }
$media = $soma/20;
echo 'a media foi: '. $media . "<br/>";
echo "<br>";
$notamedia = 0;

for($i = 0; $i <= 19; $i++){
    if($nota[$i] >= $media) {
    $notamedia++;
    }
}
echo "<br>";
echo 'acima da média: '. $notamedia . "<br/>";

?>

</body>
</html>