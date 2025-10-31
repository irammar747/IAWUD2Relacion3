<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $edad = htmlspecialchars($_POST['edad']);
        $edad = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);
        if(filter_var($edad, FILTER_VALIDATE_INT)){
            echo "Tienes $edad años";
            if($edad >= 18){
                echo ", eres mayor de edad";
            }else{
                echo ", eres menor de edad";
            }
        }else{
            echo "Edad no válida";
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
    <form action="" method="post">
        <label for="name">Edad: 
            <input type="text" name="edad" id="edad">
        </label>
        <br>
        <input type="submit" value="¿Mayor de edad?">
    </form>
</body>
</html>