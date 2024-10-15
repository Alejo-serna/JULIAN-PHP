<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../formularios/css/formulario5.css">
</head>
<body>
    <div class="from-contenedor">
        <form action="procesar5.php" method="post">
            <h2>Crear Usuario</h2>
            <div class="from-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre" required>
            </div>
            <div class="from-group">
                <label for="txtCedula">Cedula</label>
                <input type="cedula" name="txtCedula" id="txtCedula" required>
            </div>
            <div class="from-group">
                <label for="txtTelefono">Telefono</label>
                <input type="telefono" name="txtTelefono" id="txtTelefono" required>
            </div>
            <div class="from-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail" required>
            </div>
            <div class="from-group">
                <label for="txtSumar">1- no tiene estudios</label>
                <input type="radio" name="estudio" id="txtNoEstudio" required>
                <label for="txtRestar">2- estudios primario</label>
                <input type="radio" name="estudio" id="txtPri" required >
                <label for="txtRestar">3- estudios secundarios</label>
                <input type="radio" name="estudio" id="txtSecu" required>
            </div>
            <div class="form-group">
                <button type="submit">Crear</button>
            </div>
        </form>
    </div>
</body>
</html>