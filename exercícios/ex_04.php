<!-- Exercício 04 – Gerador de Senhas -->

<?php

function gerarSenha(){
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^';
    $tamanho = 12;
    $senha = '';

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];    
        //o .= funciona basicamente para concatenar, que é adicio-
        // nar um valor a uma variável já existente, sem apagar o-
        // valor que já estava nela. No caso, ela vai adicionar  -
        // um caractere aleatório a cada iteração do loop, até   -
        // que a senha tenha 12 caracteres como foi especificado
    }

    return $senha;
}

?>