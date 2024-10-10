<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../formularios/css/formulario3.css">
</head>
<body>
    <div class="from-contenedor">
        <form action="procesar3.php" method="post">
            <h2>Crear Usuario</h2>
            <div class="from-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre" required>
            </div>
            <div class="from-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail" required>
            </div>
            <div class="from-group">
                <label for="txtCiudad">Ciudad</label>
                <select name="txtCiudad" id="txtCiudad" required>
                    <option value="nada"></option>
                    <option value="Manizales">Manizales</option>
                    <option value="Medellin">Medellin</option>
                    <option value="Bogota">Bogota</option>
                    <option value="Ibague">Ibague</option>
                    <option value="Bucaramanga">Bucaramanga</option>
                </select>
            </div>
            <div class="from-group">
                <label for="txtEdad">Fecha de Nacimiento</label>
                <input type="date" name="txtEdad" id="txtEdad" required>
            </div>
            <div class="form-group">
                <button type="submit">Crear</button>
            </div>
        </form>
    </div>
</body>
</html>