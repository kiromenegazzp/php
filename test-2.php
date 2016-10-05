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

    rep_find($arr);
}

function rep_find($ar){
    $res = '';
    for($n = 0; $n < count($ar); $n++){
        $counter = 0;
        for($k = 0; $k < count($ar); $k++) {
            if($ar[$n] == $ar[$k]){
                $counter++;
            }
        }
        if($counter > 1){
            $res .= $ar[$n] . ' ' . $counter . ' ' ;
        }
        $ar = array_diff($ar, [$ar[$n]]);
        sort($ar);
        $n--;
    }
    echo $res;
}
    str_gen(5, 3);

?>
</body>
</html>
