<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <form action="procesar2.php">
            <h2>Deportes que practicas</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <legend>Seleccione los deportes</legend>
                <label>
                    <input type="checkbox" name="deportes[]" value="Futbol"> Futbol
                </label>
                <label>
                    <input type="checkbox" name="deportes[]" value="Futbol"> Baloncesto
                </label>
                <label>
                    <input type="checkbox" name="deportes[]" value="Futbol"> Voleyball
                </label>
                <label>
                    <input type="checkbox" name="deportes[]" value="Futbol"> Natacion
                </label>
                <label>
                    <input type="checkbox" name="deportes[]" value="Futbol"> Ajedrez
                </label>
                <label>
                    <input type="checkbox" name="deportes[]" value="Futbol"> Tenis de mesa
                </label>
                <label>
                    <input type="checkbox" name="deportes[]" value="Futbol"> Tenis
                </label>
                <label>
                    <input type="checkbox" name="deportes[]" value="Futbol"> Beisball
                </label>
            </div>
        </form>
    </div>
</body>
</html>