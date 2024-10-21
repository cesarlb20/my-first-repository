<?php
/* CBTis 89
programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$arraynombres=array("jose","juan","pedro","Esteban","Elena","ana");
$longitud=count($arraynombres);

for ($i=0; $i<$longitud ; $i++) { 
	echo $arraynombres[$i];
	echo "<br>";
}
?>