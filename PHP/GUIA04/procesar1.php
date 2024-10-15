<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="info-container">
        <?php
        $numero1 = $_POST['txtNumero1']?? null; // Operador nulo seguro
        // Operador ternario
        $numero2 ($_POST['txtNumero2']) ? $_POST['txtNumero2'] : null;
        print("<h5>Número 1: $numero1</h5>");
        print("<h5>Número 2: $numero2</h5>");

        if (isset($_POST['operacion1']) && $_POST['operacion1'] == "sumar") {
            $suma = $numero1 + $numero2;
            print("<label>La suma es: $suma</label>");
        }
        if (isset($_POST['operacion2']) && $_POST['operacion2'] == "restar") {
            $resta = $numero1 - $numero2;
            print("<label>La resta es: $resta</label>");
        }
        if (isset($_POST['operacion3']) && $_POST['operacion3'] == "multiplicar") {
            $multiplicacion = $numero1 * $numero2;
            print("<label>La multiplicacion es: $multiplicacion</label>");
        }
        if (isset($_POST['operacion4']) && $_POST['operacion4'] == "dividir") {
            $division = $numero1 / $numero2;
            print("<label>La resta es: $division</label>");
        }
        ?>
    </div>
</body>
</html>