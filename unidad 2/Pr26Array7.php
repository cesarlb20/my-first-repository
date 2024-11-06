<?php
/* CBTis 89
programa que usa una arrar multidimensional
Cesar Limon Blanco
3.-A Programacion Matutino
*/
   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>