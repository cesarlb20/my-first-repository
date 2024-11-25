<?php
/* CBTis 89
programa que almacena en un arreglo llamado compras el valor de 4 compras posterior mente en otros arreglos se debe almacenar informacion 
Cesar Limon Blanco
3.-A Programacion Matutino
*/

$compras=array(800,500,123,696,693,804);
$descuentos=array();
$total=array();
$porcentaje=array(0,0.10,0.15,0.20,0.25);

$longitud=count($compras);

for($i=0; $i<$longitud; $i++) { 

	if ($compras[$i]<300) {
		$descuentos[$i]=$compras[$i]*$porcentaje[0];
	}
	elseif ($compras[$i]>300&&$compras[$i]<=1000) {
		$descuentos[$i]=$compras[$i]*$porcentaje[1];
	}
   elseif ($compras[$i]>=1000&&$compras[$i]<=2500) {
		$descuentos[$i]=$compras[$i]*$porcentaje[2];
	}
	elseif ($compras[$i]>=2500&&$compras[$i]<=5000) {
		$descuentos[$i]=$compras[$i]*$porcentaje[3];
	}
	elseif ($compras[$i]>5000) {
		$descuentos[$i]=$compras[$i]*$porcentaje[4];
	}
	$total[$i]=$compras[$i]-$descuentos[$i];

echo "el descuento de la compra es ",$descuentos[$i]," y el total es de ",$total[$i];
echo "<p>";

}




