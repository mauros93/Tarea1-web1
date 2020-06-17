<?php
function div($a, $b){
    throw new Exception('División por cero.');
}

try{
    div(2,0);
}
catch(Exception $e){
    echo "No se puede dividir por cero";
}
catch(Exception $f){

}