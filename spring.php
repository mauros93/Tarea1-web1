<?php
    $numZapatos = 5;
    $precioZapatos = 150000;
    
    if($numZapatos == 3){
        $total = ($numZapatos*$precioZapatos)*0.9;
    }
    else if($numZapatos > 3  && $numZapatos <=5){
        $total = ($numZapatos*$precioZapatos)*0.8;
    }
    else if($numZapatos > 5){
        $total = ($numZapatos*$precioZapatos)*0.6;
    }

    echo "El total de los 5 Zapatos con el descuento es $total ";
?>