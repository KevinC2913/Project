<?php
#Calcular la suma de los primeros n numeros: pide al usuario que ingrese un numero N. Utiliza un ciclo For para sumar los numeros del 1 al N.
$suma = readline("Digite un numero para ver la suma del 1 hasta el numero ingresado : ");
$numero =0;
for ($i = 1; $i <= $suma; $i++) { 
     $numero  += $i . "\n";
} 
echo "La suma de los numeros es: " . $numero;