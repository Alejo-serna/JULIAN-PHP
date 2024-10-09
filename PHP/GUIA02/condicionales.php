<?php
//$aleatorio = rand(1,100);
//if($aleatorio > 50) {
//    echo "El número es mayor a 50";
//} else {
//    echo "El número es menor a 50";
//}



/*************** */

/*//Generar un valor aleatorio entre 1 y 100.
Luego mostrar. Si tiene 1,2 0 3 digitos*/

// if() {
// }elseif(){
// }else {
// }
$aleatorio = rand(1,999);
print("El numero es $aleatorio");
echo "<br>";
if ($aleatorio < 10) {
    echo "El número tiene 1 digito";
} elseif ($aleatorio > 99) {
    echo "El número tiene 3 digitos";
} else {
    echo "El número tiene 2 digitos";
}