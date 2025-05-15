<?php
$calificacion1=100;
$calificacion2=50;
$calificacion3=30;

$promedio=($calificacion1+$calificacion2+$calificacion3)/3;
echo "el promedio es: $promedio";

if($promedio < 69){
    echo"reprobado";
}
if($promedio >= 70 && $promedio <=95){
    echo "aprobado";
}

if($promedio >=96){
    echo "exento";
}

?>