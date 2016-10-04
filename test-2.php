<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

    function str_array($arr){
        $result = [];
        for($n = 0; $n < count($arr); $n++){
            $str = $arr[$n];
            $result[$str] = true;
        }
        var_dump($result);

    }

    str_array($arr);
    //array_walk($arr, 'str_array');
}

str_gen(3, 3);




?>
</body>
</html>