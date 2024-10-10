<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../formularios/css/formulario3.css">
</head>
<body>
    <div class="info-contenedor">
        <?php
            // Validación con operador ternario
            $nombre = (isset($_POST["txtNombre"]) == true) ? $_POST["txtNombre"] : null;
            $email = isset($_POST["txtEmail"]) ? $_POST["txtEmail"] : null;
            $ciudad = $_POST["txtCiudad"] ?? null;
            $fechaNacimiento = $_POST["txtEdad"] ?? null;

            
            if ($fechaNacimiento) {
                $fechaNacimiento = new DateTime($fechaNacimiento);
                $fechaActual = new DateTime();
                $edad = $fechaActual->diff($fechaNacimiento)->y;
            }  

            echo "<span>Nombre: $nombre</span><br>";
            echo "<span>Email: $email</span><br>";
            echo "<span>Ciudad: $ciudad</span><br>";
            echo "<span>Edad: $edad años</span><br>" ;
            if($edad >=18){
                echo "Es mayor de edad";
            }else{
                echo "Es menor de edad";
            }
            ?>
    </div>
</body>
</html>