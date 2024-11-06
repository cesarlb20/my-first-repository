<?php
/* CBTis 89
programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Cesar Limon Blanco
3.-A Programacion Matutino
*/

//almacena datos en un arreglo
$arraydatos =["karina","rosales","orozco"];

//Convierte un array en una cadena de texto
$string = implode(" ", $arraydatos);
echo "cadena de texto <br>";
echo $string;
echo "<br>","<br>";

//cadena de teto a aseparar 
$cadena = "tercero de progra macion matutino";

//convierte una cadena a de texto a un array
$array = explode(" ", $cadena);

$longitud=count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";
//Imprime los elementos del arreglo
for ($i=0; $i <$longitud ; $i++) { 
	echo $array[$i];
	echo "<br>";
}