<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero1= $_POST['txtNumero1']?? null;
    $numero2= $_POST['txtNumero2']?? null;
    $numero3= $_POST['txtNumero3']?? null;

    if ($operacion == "sumar") {
        $resultado = $numero1 + $numero2;
    } else {
        $resultado = $numero1 - $numero2;
    }
    echo "<span>El resultado de $operacion $numero1 y $numero2 es: $resultado</span>";
    ?>
</body>
</html>