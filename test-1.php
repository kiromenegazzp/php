<?php

$string = "Россия";
$reverse = '';

for($j = mb_strlen($string) - 1; $j > -1; $j--){
    $reverse .= mb_substr($string, $j, 1, mb_detect_encoding($string));
}
echo $reverse;

?>
