<?php
function str_gen($n, $k){
    $arr = [];
    //$alphabet = "abcdefghijklmnopqrstuvwxyz0123456789";
    $alphabet = "ab";
    for($i = 0; $i < $n; $i++){
        $string = '';
        for ($j = 0; $j < $k; $j++){
            $string .= $alphabet[rand(0, strlen($alphabet) - 1)];
        }
        $arr[$i] = $string;
    }
    var_dump($arr);

    rep_find($arr);
}

function rep_find($ar){
    $res = '';
    for($t = 0; $t < count($ar); $t++){
        $counter = 0;
        for($p = 0; $p < count($ar); $p++) {
            if($ar[$t] == $ar[$p]){
                $counter++;
            }
        }
        if($counter > 1){
            $res .= $ar[$t] . ' ' . $counter . ' ' ;
        }
        $ar = array_diff($ar, [$ar[$t]]);
        sort($ar);
        $t--;
    }
    echo $res;
}
    str_gen(5, 3);
?>
