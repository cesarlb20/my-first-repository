 <?php
/* CBTis 89
programa que con un array almacena peso de las personas y les dice si estan en un peso sano o exesivo
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$nombres=array("sara","pepe","luis","julio","axel");
$peso=array(50,45,66,70,80);
$altura=array(1.50,1.64,1.70,1.80,1.78);
$resultados=array();

 //multiplicacion
 echo"**Resulados de IMC**","<br>","<br>";
 $longitud1 = count($peso);
$longitud2 = count($altura);
for ($i=0; $i<$longitud1 ; $i++) {
for ($i=0; $i<$longitud2 ; $i++) {

$resultados[$i]=$peso[$i]/($altura[$i]*$altura[$i]);

if ($resultados[$i]>18.5) {
	echo "la persona llamada ",$nombres[$i]," pesa ",$peso[$i], " y mide ", $altura[$i], "por lo que su IMC es de ",$resultados[$i]," y esta en un peso mas alto de lo normal";
	echo "<p>";
}
elseif ($resultados[$i]<18.5){
	echo "la persona llamada ",$nombres[$i]," pesa ",$peso[$i], " y mide ", $altura[$i], "por lo que su IMC es de ",$resultados[$i]," y esta en un peso mas bajo de lo normal";
	echo "<p>";
}

elseif ($resultados[$i]==18.5){
	echo "la persona llamada ",$nombres[$i]," pesa ",$peso[$i], " y mide ", $altura[$i], "por lo que su IMC es de ",$resultados[$i]," y esta en un peso normal";
	echo "<p>";
}
	
	
 	}
 }