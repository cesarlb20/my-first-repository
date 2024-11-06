<?php
/* CBTis 89
programa que con un array imprime pares e impares
Cesar Limon Blanco
3.-A Programacion Matutino
*/

 $nombre= "pablo";
 $array = array("pablo","julio","jose","abisai","alfredo","chuy","anna","pedro");

 $longitud = count($array);


for ($i=0; $i<$longitud ; $i++) { 
 	if ($array[$i]==$nombre) 
 	{echo"el nombre esta en el array";
     echo"<br>";}
 		else
 	    {echo"el nombre no esta";
 	     echo"<br>";}
 }
 		
