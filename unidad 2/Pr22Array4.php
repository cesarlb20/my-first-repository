<?php
/* CBTis 89
programa que almacena diversos datos en un arreglo de un equipo de futball
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$equipo=array("portero"=>"julio","defensa"=>"diego","medio"=>"jair","delantero"=>"rafa");

echo"** Seleccion Nacional**","<br>","<br>";
foreach($equipo as $posicion=>$jugador) {
	echo "el jugador " . $jugador . " es el ",$posicion;
	echo "<br>","<br>";
	// code...
}