<?php
$resultado;
for ($x=1; $x <11 ; $x++) { 

    echo "Tabuada do: $x". "<br><br>";

    for($y=1; $y <= 10; $y++){
        $resultado = $x * $y;
        echo "$x X $y = $resultado". "<br>";
    }
}