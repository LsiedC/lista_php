<!-- Exercício 06 – Conversor de Temperatura -->

<?php

function converterTemperatura($temperatura, $EscalaOrigem, $EscalaDestino){


    if ($EscalaOrigem == 'C' && $EscalaDestino == 'F') {
        return ($temperatura * 9/5) + 32;
    } elseif ($EscalaOrigem == 'F' && $EscalaDestino == 'C') {
        return ($temperatura - 32) * 5/9;
    } elseif ($EscalaOrigem == 'C' && $EscalaDestino == 'K') {
        return $temperatura + 273.15;
    } elseif ($EscalaOrigem == 'K' && $EscalaDestino == 'C') {
        return $temperatura - 273.15;
    } elseif ($EscalaOrigem == 'F' && $EscalaDestino == 'K') {
        return ($temperatura - 32) * 5/9 + 273.15;
    } elseif ($EscalaOrigem == 'K' && $EscalaDestino == 'F') {
        return ($temperatura - 273.15) * 9/5 + 32;
    } else {
        return "Escala de temperatura inválida.";
    }
}

echo "<h3>Só pra ver:</h3>";

echo "25C em Fahrenheit é " . converterTemperatura(25, 'C', 'F') . "F<br>";
echo "100F em Celsius é " . converterTemperatura(100, 'F', 'C') . "C<br>";
echo "0C em Kelvin é " . converterTemperatura(0, 'C', 'K') . "K<br>";