<?php
/* CBTis 89
programa que con un array imprime pares e impares
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$ropa=["playera"=>"100","camisa"=>"250","pantalones de mezclilla"=>"300","bermudas"=>"200"];


echo"** tienda ropa perrona**","<br>","<br>";
foreach($ropa as $articulo=>$precio) {
	echo "la prenda es " . $articulo . " y cuesta ",$precio;
	echo "<br>","<br>";
	// code...
}