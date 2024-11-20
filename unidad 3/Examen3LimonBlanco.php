<?php
/* CBTis 89
programa que almacena el nombre de cuatro personas y e  otro arreglo multidimensuonal llamado calificaciones almacena las calificaciones d cada uno de ellos por medio de filas y columnas
Cesar Limon Blanco
3.-A Programacion Matutino
*/

$alumnos = array("luz","Fer","Leo","Ale");
$calificaciones=array(array(6,4,5),array(7,9,8),array(7,9,5),array(5,4,6));
$promedio=array();
$status=array();

$sumatoria=array(0,0,0,0);

echo "Alumnos Promedio Status";
echo "<br>";

for ($x=0; $x<4; $x++) { 
   for ($y=0; $y<3; $y++){
   	$sumatoria[$x]=$sumatoria[$x]+$calificaciones[$x][$y];
   	$promedio[$x]=$sumatoria[$x]/3;


   }

if ($promedio[$x]<=5) {
   	 $status[$x]="Reprobado";
   }

   elseif ($promedio[$x]>=6) {
   	$status[$x]="Aprobado";
   }

   echo $alumnos[$x],"------------",$promedio[$x],"------------",$status[$x];
    echo "<br>";
}
echo "Calificaciones";
echo "<br>";
for ($x=0; $x<4; $x++) { 
   for ($y=0; $y<3; $y++) 
   {echo $calificaciones[$x][$y]." ";}
echo "<br>";
}