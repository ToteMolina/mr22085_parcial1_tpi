<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $ingresar_temperatura = $_POST["ingresar_temperatura"];
    $tipo_conversion = $_POST["tipo_conversion"];
    
    $resultado = 0;
    if ($tipo_conversion == 1){
        $resultado = ($ingresar_temperatura * (9/5)) + 32;
    } else {
        $resultado = ($ingresar_temperatura - 32) * (5/9);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="ingresar_temperatura">Ingrese la temperatura: </label>
        <input type="text" id="ingresar_temperatura" name="ingresar_temperatura">
        <select name="tipo_conversion" id="tipo_conversion">
            <option value="1">Celsius a Fahrenheit</option>
            <option value="2">Fahrenheit a Celsius</option>
        </select>

        <button type="submit">Calcular</button>
    </form>
    <?php if(isset($resultado)): ?>
        <p>El resultado es: <?= $resultado ?></p>
    <?php endif; ?>
</body>
</html>