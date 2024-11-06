<?php
/* CBTis 89
programa que almacena diversos datos en un arreglo dando sus datos
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$datos=array("pedro"=>"Cbtis 89 Programacion","diego"=>"Cbtis 110 construccion","juan"=>"Cbtis 89 logistica","pepe"=>"Cbtis 130 Gastronomia");

echo"** Seleccion Nacional**","<br>","<br>";
foreach($datos as $nombre=>$estudia) {
	echo "el estudiante " . $nombre . " estudia en ",$estudia;
	echo "<br>","<br>";
	// code...
}
