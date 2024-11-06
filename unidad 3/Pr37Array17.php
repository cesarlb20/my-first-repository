 <?php
/* CBTis 89
programa que con un array almacena peso de las personas y les dice si estan en un peso sano o exesivo
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$arraynumeros=array(-4,8,17,-11,-3,1,20,-30,21,50,-73,-7,-10,-8);
$arraypositivos=array();
$arraynegativos=array();
$sumanegativa=0;
$sumapositiva=0;
$longitud=count($arraynumeros);

echo"**numeros positivos**","<br>","<br>";
for ($i=0; $i<$longitud; $i++) {
	if ($arraynumeros[$i]>0) {
	$arraypositivos[$i]=$arraynumeros[$i];
	echo $arraypositivos[$i];
	echo "<p>";
	$sumapositiva += $arraynumeros[$i];
   }
 	}
 	echo "la suma es de ",$sumapositiva;
 	echo "<p>";

 	echo"**numeros Negativos**","<br>","<br>";
for ($i=0; $i<$longitud; $i++) {
	if ($arraynumeros[$i]<0) {
	$arraynegativos[$i]=$arraynumeros[$i];
	echo $arraynegativos[$i];
	echo "<p>";
	$sumanegativa += $arraynumeros[$i];
   }
 	}
echo "la suma es de ",$sumanegativa;
