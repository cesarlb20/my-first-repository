<?php
/* CBTis 89
programa que dice el cambio en billetes}
Cesar Limon Blanco
3.-A Programacion Matutino
*/
$cant;$bmil;$bquinientos;$bdocientos;$bcien;$bcincuenta;$bveinte;$md;$mc;$mdo;$mu;$cheque=50;$resi;

$bmil=floor($cheque/1000);
echo "1000 = ",$bmil;
echo "<br>";
$resi=$cheque%1000;
$bquinientos=floor($resi/500);
echo "500 = ",$bquinientos;
echo "<br>";
$resi=$cheque%500;
$bdocientos=floor($resi/200);
echo "200 = ",$bdocientos;
echo "<br>";
$resi=$cheque%200;
$bcien=floor($resi/100);
echo "100 = ",$bcien;
echo "<br>";
$resi=$cheque%100;
$bcincuenta=floor($resi/50);
echo "50 = ",$bcincuenta;
echo "<br>";
$resi=$cheque%50;
$bveinte=floor($resi/20);
echo "20 = ",$bveinte;
echo "<br>";
$resi=$cheque%20;
$md=floor($resi/10);
echo "10 = ",$md;
echo "<br>";
$resi=$cheque%10;
$mc=floor($resi/5);
echo "5 = ",$mc;
echo "<br>";
$resi=$cheque%5;
$mdo=floor($resi/2);
echo "2 = ",$mdo;
echo "<br>";
$resi=$cheque%2;
$mu=floor($resi/1);
echo "1 = ",$mu;
echo "<br>";

?>



