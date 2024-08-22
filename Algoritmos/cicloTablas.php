<?php
// Solicitar al usuario que ingrese un número
$numero = readline("Ingresa un número: ");

for ($i = 1; $i <= $numero; $i++) {
    echo "Tabla de multiplicar del $i:\n";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "\n";
    }
    echo "\n"; // Salto de línea para separar las tablas
}
?>
