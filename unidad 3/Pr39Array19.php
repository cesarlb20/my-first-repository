<?php
/* CBTis 89
programa que almacena informacion de 6 personas y dependiendo su edad contabiliza en diversos arreglos de a cuerdo a las siguientes condiciones:
si la persona es menor de 18 años se debe colocar un 1 en el grupo 1.
si la persona tiene entre 18 y 49 años se debe colocar un 1 en el arreglo de gurpo 2 y en los otros colocar un 0 si la persona tiene 50 años se debebe colocar un 1 en el grupo 3 y un 0 en los demas
Cesar Limon Blanco
3.-A Programacion Matutino
*/

$nombre=array("paco","mari","lalo","rosi","paty","Beto");

$edad=array(17,30,71,38,12,58);
$grupo1=array(0,0,0,0,0,0);
$grupo2=array(0,0,0,0,0,0);
$grupo3=array(0,0,0,0,0,0);

$longitud=count($nombre);
$longitud2=count($edad);

echo "Nombre","--","Edad","--","grupo1","--","grupo2","--","grupo3";
echo "<p>";

for ($i=0; $i<$longitud ; $i++) {
	if ($edad[$i]<18) {
		$grupo1[$i]=1;
	}
	elseif ($edad[$i]>18&&$edad[$i]<45) {
       $grupo2[$i]=1;
	}
	elseif ($edad[$i]>50) {
       $grupo3[$i]=1;
	}
	echo $nombre[$i],"-------",$edad[$i],"-------",$grupo1[$i],"---------",$grupo2[$i],"------------",$grupo3[$i];
	echo "<br>";
}