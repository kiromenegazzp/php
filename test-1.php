<?php

/*
Написать скрипт, который заданное слово переворачивает задом-на-перед,
 учесть возможность ввода русских слов, для этого изучить мультибайтные
функции работы со строками начинающиеся на mb_
*/

$string ="Россия";

function mb_strrev ($string, $encoding = null) {
    if ($encoding === null) {
        $encoding = mb_detect_encoding($string);
    }

    $length   = mb_strlen($string, $encoding);
    $reversed = '';
    while ($length > -1) {
        $reversed .= mb_substr($string, $length, 1, $encoding);
        $length--;
    }

    return $reversed;
}
echo mb_strrev($string);
?>