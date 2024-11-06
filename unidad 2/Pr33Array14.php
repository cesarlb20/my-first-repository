<?php
/* CBTis 89
programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$arraynombres=array("pablo","julio","jose","abisai","alfredo","chuy");
echo "Datos del arreglo ordenados de forma ascendente por medio de un ciclo for";
echo "<p>";


//orden ascendente
sort($arraynombres);
$longitud = count($arraynombres);


for ($i=0; $i<$longitud ; $i++) {  
 	{echo $arraynombres[$i];
	echo "<br>";}
 }

echo "posteriormente se agregaron couatro datos y se eliminaron dos ";
echo "<p>";

array_push($arraynombres,"sergio");
array_push($arraynombres,"pepe");
array_push($arraynombres,"max");
array_push($arraynombres,"milton");
unset($arraynombres[3]);
unset($arraynombres[2]);

//orden descendente
rsort($arraynombres);
$longitud = count($arraynombres);


for ($i=0; $i<$longitud ; $i++) {  
 	{echo $arraynombres[$i];
	echo "<br>";}
 }
 echo "El numero de elementos actual en el arreglo es de ",$longitud;
?>