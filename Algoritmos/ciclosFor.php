<?php
#ciclos

#ciclo for (usar si se conoce el valor)
$tabla = readline("Digite la talba de multiplicar que desea ver");
for ($i = 1; $i <= 12; $i++) { 
    echo $tabla . " x " . $i . " = " . ($i * $tabla) . "\n";
}