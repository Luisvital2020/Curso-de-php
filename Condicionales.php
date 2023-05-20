<?php

$x = 33;
$x1 = 80;

if( $x == 33)
{
    $x = 55;
}
echo "Ahora el valor de x es [$x]" ;
if( $x >= 100 ) {
   
    echo "El valor es igual o mayor de 100";
}
   else if($x >= 0 ) {
    echo "El valor esta entre 0 y 99";
   }
else {
    echo "El valor e negativo";
}


?>