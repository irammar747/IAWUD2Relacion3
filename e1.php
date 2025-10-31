<?php
    require_once 'funciones.php';

    $errores = [];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];

        //Sanitizamos
        $n1 = filter_var($n1, FILTER_SANITIZE_NUMBER_INT);
        $n2 = filter_var($n2, FILTER_SANITIZE_NUMBER_INT);

        //Validamos
        if(filter_var($n1, FILTER_VALIDATE_INT) === false){
            $errores['num1_no_valido'] = "Número no válido";
        }
        if(filter_var($n2, FILTER_VALIDATE_INT) === false ){
            $errores['num2_no_valido'] = "Número no válido";
        }
        
        //Si no hay errores calculamos el resultado
        if(empty($errores)){
            $r = sumar($n1, $n2);
        }
        
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Relación 3 - Funciones</h1>
    <h2>Ejercicio 1 - Suma de dos números</h2>
    <form action="" method="post">
        <label for="num1">
            Número 1:
            <input type="text" name="num1" id="num1" value="<?php echo htmlspecialchars($n1 ?? ''); ?>"/>
            <?php if(isset($errores['num1_no_valido'])) echo "<span>{$errores['num1_no_valido']}</span>"?>
        </label>
        <label for="num2">
            Número 2:
            <input type="text" name="num2" id="num2" value="<?php echo htmlspecialchars($n2 ?? ''); ?>"/>
            <?php if(isset($errores['num2_no_valido'])) echo "<span>{$errores['num2_no_valido']}</span>"?>
        </label>
        <input type="submit" value="Sumar">
    </form>

    <p><?php if(isset($r)) echo "Resultado = $r" ?></p>
</body>
</html>