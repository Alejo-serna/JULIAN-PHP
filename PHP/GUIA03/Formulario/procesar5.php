<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../formularios/css/formulario5.css">
</head>
<body>
    <div class="info-contenedor">
        <?php
            // Validación con operador ternario
            $nombre = (isset($_POST["txtNombre"]) == true) ? $_POST["txtNombre"] : null;
            $cedula = isset($_POST["txtCedula"]) ? $_POST["txtCedula"] :null;
            $telefono = isset($_POST["txtTelefono"]) ? $_POST["txtTelefono"] :null;
            $email = isset($_POST["txtEmail"]) ? $_POST["txtEmail"] : null;
            $estudio = $_POST['estudio'] ?? null;
           
            
            echo "<span>Nombre: $nombre</span><br>";
            echo "<span>Cedula: $cedula</span><br>";
            echo "<span>Telefono: $telefono</span><br>";
            echo "<span>Email: $email</span><br>";

            if($estudio == "txtNoEstudio") {
                echo "no tiene estudio";
            }else if ($estudio == "txtPri") {
                echo "tiene estudios primarios";
            }else  {
                echo "tiene estudios secundarios";   
            }
        ?>
    </div>
</body>
</html>