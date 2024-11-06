<?php
/* CBTis 89
programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$ns1=array(10,20,30,40,50);
$ns2=array(3,7,6,15,18);
$resultado1=array();


$longitud1 = count($ns1);
$longitud2 = count($ns2);
for ($i=0; $i<$longitud1 ; $i++) {
for ($i=0; $i<$longitud2 ; $i++) {
	$resultado1[$i]=$ns1[$i]+$ns2[$i];
	echo $ns1[$i], "+", $ns2[$i], " = ",$resultado1[$i];
	echo "<p>";
 	}
 }

 //resta
 echo"** Restas **","<br>","<br>";
 $longitud1 = count($ns1);
$longitud2 = count($ns2);
for ($i=0; $i<$longitud1 ; $i++) {
for ($i=0; $i<$longitud2 ; $i++) {
	$resultado1[$i]=$ns1[$i]-$ns2[$i];
	echo $ns1[$i], "-", $ns2[$i], " = ",$resultado1[$i];
	echo "<p>";
 	}
 }

 //multiplicacion
 echo"**multiplicacion **","<br>","<br>";
 $longitud1 = count($ns1);
$longitud2 = count($ns2);
for ($i=0; $i<$longitud1 ; $i++) {
for ($i=0; $i<$longitud2 ; $i++) {
	$resultado1[$i]=$ns1[$i]*$ns2[$i];
	echo $ns1[$i], "x", $ns2[$i], " = ",$resultado1[$i];
	echo "<p>";
 	}
 }

 //divicion 
 echo"** Division **","<br>","<br>";
 $longitud1 = count($ns1);
$longitud2 = count($ns2);
for ($i=0; $i<$longitud1 ; $i++) {
for ($i=0; $i<$longitud2 ; $i++) {
	$resultado1[$i]=$ns1[$i]/$ns2[$i];
	echo $ns1[$i], "%", $ns2[$i], " = ",$resultado1[$i];
	echo "<p>";
 	}
 }