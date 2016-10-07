<?php

    function rep_find($n, $k)
    {
        $arr = [];
        //$alphabet = "abcdefghijklmnopqrstuvwxyz0123456789";
        $alphabet = "ab";
        for ($i = 0; $i < $n; $i++) {
            $string = '';
            for ($j = 0; $j < $k; $j++) {
                $string .= $alphabet[rand(0, strlen($alphabet) - 1)];
            }
            $arr[$i] = $string;
        }
        var_dump($arr);

        $res = '';
        for ($t = 0; $t < count($arr); $t++) {
            $counter = 0;
            for ($p = 0; $p < count($arr); $p++) {
                if ($arr[$t] == $arr[$p]) {
                    $counter++;
                }
            }
            if ($counter > 1) {
                $res .= $arr[$t] . ' ' . $counter . ' ';
            }
            $arr = array_diff($arr, [$arr[$t]]);
            sort($arr);
            $t--;
        }
        echo $res;
    }

    rep_find(3, 3);

?>