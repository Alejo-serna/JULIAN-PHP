<?php
/*// Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while
y por último el do/while. 
La estructura for permite incrementar una variable de 2 en 2//*/

// FOR

 $tabla = 2;

echo "Tabla del $tabla usando for:";
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "<br>$tabla x $i = " . ($tabla * $i);
}

echo "<hr>";

// WHILE

echo "Tabla del $tabla usando while:";
echo "<br>";
$valor = 1;
while ($valor <= 10) {
    echo "<br>$tabla x $valor = " . ($tabla * $valor);
    $valor++;
}

echo "<hr>";

// DO/WHILE

echo "Tabla del $tabla usando do-while:";
echo "<br>";
$numero = 1;
do {
    echo "<br>2 x $numero = " . ($tabla * $numero);
    $numero++;
} while ($numero <= 10);