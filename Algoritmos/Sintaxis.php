<?php
#Tipos de variables
$nameVariable = "Hola";
$numero = 10;
$decimal = 10.5;
$bool = true;
$array = [1, 2, 3];
#Estructuras de control
#si simple
if ("Condicion"){

}
#si doble
if ("Condicion"){
    echo "si";
}else{
    echo "no";
}
#si Anidado
# $anidar = "Anidar terminos";
if ("Condicion"){
    echo "si";
}else if ("condicion"){
    echo "si";
}else{
    echo "NO"; # "no .$anidar";
}
#Ciclos
#Ciclo For
for ($i=0; $i < 10; $i++); {
    echo $i 
    # code...
}
#ciclo WHILE
$i = 0;
while ($i <= 10); {
    echo $i;
    $i++;
    #O usar "PRINT"
    # code...
}
#Ciclo FOREACH
$Array =[1,2,3,4,5];
foreach ($Array as $value) {
    echo $Value;
    # code...
}
#funciones
function sumar($a,$b){
    return $a + $b;
}
echo sumar(10,20);

?>