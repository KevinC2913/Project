<?php
$estudiantes = readline("Ingrese la cantidad de estudiantes: ");
$notaMayor = 0;
$notaMenor = 5;
$sumaNotas = 0;
$contador = 0;

for ($i=1; $i < $estudiantes; $i++){
  $notas = readline("Ingrese las notas del estudiante : " . ($i+1) . "  :");
  
 if ($notas > $notaMayor){
    $notaMayor = $notas;
}

 if ($notas < $notaMenor){
    $notaMenor = $notas;
 }

 $sumaNotas = $sumaNotas + $notas;
 $contador = $contador + 1;
}
if($notaMayor >= 3.5){
    echo "nota mayor Aprobada" . "\n";
}else{
    echo "nota mayor Reprobada". "\n";
}

if ($notaMenor < 3.5) {
echo "nota menor Reprobada" . "\n";
}else{
    echo "nota menor Aprobada" . "\n";
}
echo "la nota nota mayor es:". $notaMayor . "\n";
echo "la nota nota menor es:". $notaMenor . "\n";
echo "El promedio de las notas es:". $sumaNotas / $contador . "\n";
?>