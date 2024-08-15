<?php

if (isset($_POST['Calcular'])) {
    $num = (int)$_POST['numero'];
    $expo = (int)$_POST['exponente'];

    $resultado = 1;

    for ($i = 0; $i < $expo; $i++) { 
        $temp = 0;

        for ($j = 0; $j < $num; $j++) { 
            $temp += $resultado;
        }
        $resultado = $temp;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Exponentes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1 style="text-align:center"> Calculadora de Potencia </h1>
        <div style="width: 70%; height: auto; background-color: red; padding: 2em; border: 3px solid black; display: block; margin: auto;">
            <form action="" method="post">
                <label for="numero">Introduce un número:</label>
                <input type="number" id="numero" name="numero" required>
                <br>
                <label for="exponente">Introduce el exponente:</label>
                <input type="number" id="exponente" name="exponente" required>
                <br>
                <input type="submit" name="Calcular" value="Calcular">
                <?php echo "<h1 style='text-align:center;'> {$num}^{$expo} es: {$resultado}</h1>"; ?>
            </form>
        </div>
    </body>
</html>

