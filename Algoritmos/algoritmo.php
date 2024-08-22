<?php
#realizar un algoritmo que digitados 3 numeros me halle el numero mayor y el numero menor
$numero1 = readline("Ingrese un numero ");
$numero2 = readline("Ingrese el segundo numero ");
$numero3 = readline("Ingrese tercer numero ");
$nMayor = $numero1;
$nMenor = $numero1; 
#mayor
if ($numero2 > $nMayor) {
    $nMayor = $numero2;
}

if ($numero3 > $nMayor) {
    $nMayor = $numero3;
}
#Menor
if ($numero2 < $nMenor) {
    $nMenor = $numero2;
    
}
if ($numero3 < $nMenor) {
    $nMenor = $numero3;
    
}
echo ("el mayor es: $nMayor\n" );
echo ("el menor es: $nMenor\n" );

?>


