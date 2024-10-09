<?php
$nombre = "Juan"; // String
$edad = 25; // int
$estado = true; // bool
$peso = 65.5; // double
// Operador terrario
// $estadoTxt = ($estado)?"Activo":"Inactivo";
$estadoTxt = (!$estado)?"Inactivo":"Activo";
$output = <<<OUT
    Nombre: $nombre<br>
    Edad: $edad<br>
    Estado: $estado<br>
    Peso: $peso<br>
OUT;
echo $output;

$estaLloviendo = true;

$clima = ($estaLloviendo)?"Esta Lloviendo":"Hace sol";
$clima = (!$estaLloviendo)?"Hace sol":"Está lloviendo";
echo "Clima: $clima";

// Arrays (listas)
echo "<br><hr>";
// Array escalar (indices númericos desde cero)
$arrayFrutas = ['Mango','Pera','Piña','Kiwi'];
echo $arrayFrutas[2];

// Array asociativo
$arrayUsuario = 
["nombre" => "Juan", "email" => "j@gmail.com", "edad" => 20, "estado" => true];
echo "<br>Edad> ".$arrayUsuario['edad'];

$arrayMultiple = 
["nombre" => "Juan", "email" => "j@gmail.com", "edad" => 20, "estado" => true, 365, 
"SENA", $arrayUsuario, "frutas" => $arrayFrutas, 9];

echo "<br>Nombre> ".$arrayMultiple["nombre"];
echo "<br>Email> ".$arrayMultiple["email"];
echo "<br>Edad> ".$arrayMultiple["edad"];
echo "<br>Estado> ".$arrayMultiple["estado"];
echo "<br>Dias del año> ".$arrayMultiple[0];
echo "<br>Mejor Institucion Colombiana> ".$arrayMultiple[1];
echo "<br>Fruta> ".$arrayMultiple["frutas"][1];
echo "<br>Usuario array> ".$arrayMultiple[2]["nombre"];
echo "<br>Hoy es: ".$arrayMultiple[3];



