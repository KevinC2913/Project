<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Potencia</title>
</head>
<body>
    <h1>Calculadora de Potencia</h1>
    <form action="" method="post">
        <label for="numero">Introduce un número:</label>
        <input type="number" id="numero" name="numero" required>
        <br>
        <label for="exponente">Introduce el exponente:</label>
        <input type="number" id="exponente" name="exponente" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
<?php

function multiplicar($a, $b) {
    $resultado = 0;
    $positivo = $b > 0;
    $b = abs($b);
    for ($i = 0; $i < $b; $i++) {
        $resultado += $a;
    }
    return $positivo ? $resultado : -$resultado;
}


function potencia($base, $exponente) {
    if ($exponente == 0) {
        return 1;
    } elseif ($exponente < 0) {
        $base = 1 / $base;
        $exponente = -$exponente;
    }
    
    $resultado = 1;
    for ($i = 0; $i < $exponente; $i++) {
        $resultado = multiplicar($resultado, $base);
    }
    return $resultado;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];
    $exponente = $_POST['exponente'];

    if (is_numeric($numero) && is_numeric($exponente)) {
        $numero = (int)$numero;
        $exponente = (int)$exponente;
        $resultado = potencia($numero, $exponente);
        echo "<h2>El resultado de $numero ^ $exponente es: $resultado</h2>";
    } else {
        echo "<h2>Ambas entradas deben ser números.</h2>";
    }
} else {
    echo "<h2>Por favor, completa el formulario.</h2>";
}
?>
