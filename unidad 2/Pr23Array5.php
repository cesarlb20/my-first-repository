<?php
/* CBTis 89
programa que almacena diversos datos en un arreglo de un equipo de futball
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$frutas=array("manzana"=>25,"mango"=>40,"limon"=>35,"naranja"=>20);

echo"** Fruteria del sur **","<br>","<br>";
foreach($frutas as $fruta=>$precio) {
	echo "el kilo de " . $fruta . " cuesta ",$precio;
	echo "<br>","<br>";
	// code...
}