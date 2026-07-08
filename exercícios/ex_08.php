<!-- Exercício 08 – Organizador de Lista  -->

<?php

function ordenarNomes($nomes){
    $lista = explode(", ", $nomes); // Tira os nomes da string e coloca em um array
    $lista = array_map("trim", $lista); // Tira os espaços desnecessários
    sort($lista); // Organiza em ordem alfabética

    return $lista;
}

$entrada = ["Lucas", "Joao", "Maria", "Jose", "Ana"];
$resultado = ordenarNomes(implode(", ", $entrada)); //O implode ta aqui para transformar um array em uma string, separando os elementos por vírgula e espaço

echo "Nomes ordenados: " . implode(", ", $resultado);

?>