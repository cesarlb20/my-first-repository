<?php
/* CBTis 89
programa que con un array imprime pares e impares
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$numeros = range(1, 100);

   

   for ($i=1; $i<=100 ; $i++) {
	if ($numeros[$i]%2==0){
	echo "pares",$numeros [$i]," ";
   echo "<br>";
}
}

   

   for ($i=1; $i<=100 ; $i++) {
   if ($numeros[$i]%2>0){
   echo "impares",$numeros [$i]," ";
   echo "<br>";
}
}

?>
