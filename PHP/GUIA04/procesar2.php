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
        $nombre = $_POST['txtNombre'] ?? "";
        $deportes = $_POST["deportes"] ?? null;
        $cantidadDeportes = count($deportes);

        $htmlDeportes = "";
        foreach ($deportes as $item) {
            $htmlDeportes += "<label>$item</label>";
            echo "<label>Deporte: $item</label>";--+++++++++++++ v,k
        }
        $output = <<<OUT
        <label>Nombre: $nombre</label>
        <label>Cantidad Deportes: $cantidadDeportes</label>
        <label>Deportes Seleccionados: $htmlDeportes</label>
        OUT;
        echo "<pre>";
        print_r($deportes);
        echo "</pre>";
        ?>
    </div>
</body>
</html>