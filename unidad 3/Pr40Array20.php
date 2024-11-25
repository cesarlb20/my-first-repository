<?php
/* CBTis 89
programa que almacena por medio de un ciclo los numero del 150 al 200 de la siguiiente manera:
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$arreglo1=array();
$arreglo2=array();
$arreglo3=array();

$n=150;
echo "Pares","--","Impares","--","sumatoria";
echo "<p>";
for ($i=0; $n<=200; $i++) {

		$arreglo1[$i]=$n;
	
		$arreglo2[$i]=$n+1;
	$arreglo3[$i]=$arreglo1[$i]+$arreglo2[$i];
	$n++;

//for ($i=0; $i <25 ; $i++) { 

echo $arreglo1[$i]."-------".$arreglo2[$i]."-------".$arreglo3[$i];
	echo "<br>";
}

?>