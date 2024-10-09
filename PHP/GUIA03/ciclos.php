<?php
// CICLO FOR
for ($i=0; $i < 10 ; $i++) {
    print("<br>Número $i");
}
echo "<hr>";
$arrayFrutas = ["Mango", "Pera", "Piña", "Kiwi"];
for ($i=0; $i < count($arrayFrutas) ; $i++) { 
    echo "<br>".$arrayFrutas[$i];
}
echo "<hr>";
foreach ($arrayFrutas as $item) {
    echo "<br>$item";
}
echo "<hr>";
$arrayUsuario = ["nombre" => "Juan", "email" => "j@gmail.com", "edad" => 20, "estado" => true];
foreach ($arrayUsuario as $clave => $valor) {
    echo "<br>Clave: $clave -- Valor: $valor";
}

/*************** */
 // WHILE
 $valor = rand(1,100);
 $inicio = 1;
 while ($inicio <= $valor) {
    echo "<br>$inicio";
    $inicio++;
 }
 
 /*************** */
 echo "<hr>";
$dia = date("d");
$inicio = 1;
do {
    echo "<br>$inicio";
    $inicio++;
} while ($inicio <= $dia);