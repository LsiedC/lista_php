<?php 

function calcularFormula($x, $y){
if (($x + $y) == 0){
    return "Não é possível dividir por zero";
}
    return $resultado = (((pow($x, 2) + pow($y, 2))) / ($x + $y)) ;
}
echo "<h3>Resultado:</h3>" . calcularFormula(20,334);