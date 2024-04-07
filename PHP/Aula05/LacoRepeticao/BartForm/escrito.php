<?php

$frase = $_POST['frase'];
$quantidade = $_POST['quantidade'];
$i = 0;

while ($i <= $quantidade) {
    $i++;
}

for ($x=1; $x <= $i-1; $x++) { 
    echo "$x - $frase". "<br>";
}