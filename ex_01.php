<?php 

function calcularFormula($x, $y){


if (($x + $y) == 0){
    return "Error: Division by zero";
}
    $resultado = (((pow($x, 2) + pow($y, 2))) / ($x + $y));
    return $resultado;
}

echo calcularFormula(20,334);