<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/formulario2.css">
</head>
<body>
    <div class="info-container">
        <?php
        $nombre = (isset($_POST["txtNombre"])== true)?$_POST["txtNombre"]:Null;
        $email = (isset($_POST["txtEmail"])?$_POST["txtEmail"]:Null);

        // VALIDACION NULO SEGURO
        $telefono = $_POST ["txtTelefono"]??null;
        $password = $_POST ["txtPassword"]??null;
        $edad = $_POST ["txtEdad"]??null;
        
        echo "<span>Nombre: $nombre</span>";
        echo "<span>Email: $email</span>";
        echo "<span>Telefono: $telefono</span>";
        echo "<span>Contraseña: $password</span>";
        echo "<span>Edad: $edad</span>";
        ?>
    </div>
</body>
</html>