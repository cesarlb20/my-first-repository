<?php
/* CBTis 89
Cesar Limon Blanco
3.-A Programacion Matutino
*/
 $arrayropa = array("camisa", "pantalon"," cinturon","gorra","calcetas");

   foreach($arrayropa as $prenda){
      echo $prenda . " <BR>";
   }
   //orden ascendente
sort($arrayropa);
var_export($arrayropa);

echo "<p>";