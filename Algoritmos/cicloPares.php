<?php
#Imprimir los numeros pares de 1 al 20: Utiliza el ciclo for para recorrer los numeros del 1 al 20. Imprime solo los numeros que sean divisibles por 2
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}