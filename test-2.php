<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1'>
    <title>Title</title>
</head>
<body>
<?php

function str_gen($n, $k){
    $arr = [];
    //$alphabet = "abcdefghijklmnopqrstuvwxyz0123456789";
    $alphabet = "ab";
    for($j = 0; $j < $n; $j++){
        $string = '';
        for ($i = 0; $i < $k; $i++){
            $string .= $alphabet[rand(0, strlen($alphabet) - 1)];
        }
        $arr[$j] = $string;
    }
    var_dump($arr);

    str_array($arr);
}

function str_array($ar){
    $res = '';
    for($n = 0; $n < count($ar); $n++){
        $str = $ar[$n];
        $counter = 0;
        for($k = 0; $k < count($ar); $k++) {
            if($str == $ar[$k]){
                $counter++;
            }
        }
        if($counter > 1){
            $res .= $str . ' ' . $counter . ' ' ;
        }
        $ar = array_diff($ar, [$str]);
        sort($ar);
        $n--;
    }
    echo $res;
}
    str_gen(3, 3);

?>
</body>
</html>
