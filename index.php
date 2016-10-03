<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

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
</body>
</html>