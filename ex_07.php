<!-- Exercício 07 – Sistema de Descontos -->

<?php

function calcularDesconto($valorCompra) {
    $totalDesconto = 0;

    if ($valorCompra > 1000) {
        $totalDesconto = 0.30;
    } elseif ($valorCompra > 500) {
        $totalDesconto = 0.20;
    } elseif ($valorCompra > 100) {
        $totalDesconto = 0.10;
    }

    $desconto = $valorCompra * $totalDesconto;
    $valorFinal = $valorCompra - $desconto;

    echo "Valor original: R$ " . $valorCompra . "<br>";
    echo "Desconto aplicado: R$ " . $desconto . "<br>";
    echo "Valor final: R$ " . $valorFinal . "<br><br>";
}

calcularDesconto(250);

?>

