<?php

function mascararCpf($cpf){
    
  $cpfLimpo = preg_replace('/\D/', '', $cpf);
    if (strlen($cpfLimpo) !== 11) {        // Verifica se o cpf tem 11 caracteres sem o formato
        return "Seu CPF é inválido!";
    }
    
    $final = substr($cpfLimpo, -4);       // Aqui ele pega os ultimos 4 numeros do cpf
    
    return "*******" . $final;
}
echo mascararCpf("123.456.789-00"); // Echo serve aqui para retornar o cpf já mascarado *******8900

?>
