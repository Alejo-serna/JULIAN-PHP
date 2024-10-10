<?php
/*Arrays asociations nativos de php
$_POST:array asociativo que almacena las variables enviadas por el metodo POST 
        $_POST['txtnombre']
$_GET:array asociativo que almacena las variables enviadas por metodo GET
        $_GET['txtEmail']
$_REQUEST: array asociativo que almacena variables de ambos metodos (GET, POST, COOKIE)
        $_REQUEST['txtTelefono']

*/

$nombre = $_POST ['txtNombre'];
print ("Nombre: $nombre");