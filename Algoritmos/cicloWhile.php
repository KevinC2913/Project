<?php
#ciclo while
$tabla = readline("Digite la tabla de multiplicar que desea ver: ");
$i = 1;
while ($i <= 12) {
    echo $tabla . " x " . $i . " = " . ($i * $tabla) . "\n";
    $i++;
    #While siempre lleva contador 
}