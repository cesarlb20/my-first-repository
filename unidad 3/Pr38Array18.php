<?php
/* CBTis 89
programa con arrays multidimencionales
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$datos = array(array(10,20,30),array(40,50,60),array(70,80,90));

echo "NORMAL";
echo "<br>";
for ($x=0; $x<3; $x++) { 
   for ($y=0; $y<3; $y++) 
   {echo $datos[$x][$y]." ";}
echo "<br>";
}

echo "<p>";

echo "FILAS A COLUMNAS";
echo "<br>";
for ($x=0; $x<3; $x++) { 
   for ($y=0; $y<3; $y++) 
   {echo $datos[$y][$x]." ";}
echo "<br>";
}

echo "<p>";

echo "COLUMNAS INVERSAS";
echo "<br>";
for ($x=0; $x<3; $x++) { 
   for ($y=2; $y>-1; $y--) 
   {echo $datos[$x][$y]." ";}
echo "<br>";
}

echo "<p>";

echo "FILAS INVERSAS";
echo "<br>";
for ($x=2; $x>-1; $x--) { 
   for ($y=0; $y<3; $y++) 
   {echo $datos[$x][$y]." ";}
echo "<br>";
}

echo "<p>";

echo "ESPEJO";
echo "<br>";
for ($x=2; $x>-1; $x--) { 
   for ($y=2; $y>-1; $y--) 
   {echo $datos[$x][$y]." ";}
echo "<br>";
}

echo "<p>";
