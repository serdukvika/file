<?php
$file = fopen("poem.txt", "r");

$arr = [];
$arr = file("poem.txt");
print_r($arr);

$str_b = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>';

$str_e = '</body>
</html>';

$p = fopen("poem.html", "w");
fwrite($p, $str_b);
fwrite($p, "\n");
fwrite($p, "<h1>" . $arr[0] . "</h1>");

for ($i=0; $i < count($arr); $i++) { 
    fwrite($p, "<p>" .$arr[$i] . "</p>");
}
fwrite($p, $str_e);