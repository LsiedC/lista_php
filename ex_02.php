<!-- Exercício 02 – Espelho Mágico -->

<?php 

function inverterTexto($texto){
    return strrev($texto);
}

$texto = "qualquer coisa, oi";
echo "<h3>Texto invertido:</h3>" . inverterTexto($texto);
?>