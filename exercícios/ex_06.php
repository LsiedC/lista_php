<!-- Exercício 06 – Conversor de Temperatura -->

<?php

function converterTemperatura($temperatura, $escalaOrigem, $escalaDestino){


    if ($escalaOrigem == 'C' && $escalaDestino == 'F') {
        return ($temperatura * 9/5) + 32;
    } elseif ($escalaOrigem == 'F' && $escalaDestino == 'C') {
        return ($temperatura - 32) * 5/9;
    } elseif ($escalaOrigem == 'C' && $escalaDestino == 'K') {
        return $temperatura + 273.15;
    } elseif ($escalaOrigem == 'K' && $escalaDestino == 'C') {
        return $temperatura - 273.15;
    } elseif ($escalaOrigem == 'F' && $escalaDestino == 'K') {
        return ($temperatura - 32) * 5/9 + 273.15;
    } elseif ($escalaOrigem == 'K' && $escalaDestino == 'F') {
        return ($temperatura - 273.15) * 9/5 + 32;
    } else {
        return "Escala de temperatura inválida.";
    }
}

converterTemperatura(25, 'C', 'F');

echo "<h3>Só pra ver:</h3>";

echo "25C em Fahrenheit é " . converterTemperatura(25, 'C', 'F') . "F<br>";
echo "100F em Celsius é " . converterTemperatura(100, 'F', 'C') . "C<br>";
echo "0C em Kelvin é " . converterTemperatura(0, 'C', 'K') . "K<br>";