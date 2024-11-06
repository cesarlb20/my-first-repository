<?php
/* CBTis 89
programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Cesar Limon Blanco
3.-A Programacion Matutino
*/
 $nombre= "anna";
 $array = array(1,2,3, "casa", $nombre);


 $longitud = count($array);

 for ($i=0; $i<$longitud ; $i++) { 
 	echo $array[$i];
 	echo "<br>";
 }
 ?>

