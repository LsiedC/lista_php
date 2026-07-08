<!-- Exercício 05 – Estatísticas de Texto -->

<?php

function analisarTexto($texto){
      $numPalavras = str_word_count($texto);
      $numCaracteres = strlen($texto);
      $numVogais = preg_match_all('/[aeiou]/i', $texto);
      $numConsoantes = $numCaracteres - $numVogais;
      return [
          'O numero de palavras são' => $numPalavras,
          'O numero de caracteres são' => $numCaracteres,
          'O numero de vogais são' => $numVogais,
          'O numero de consoantes são' => $numConsoantes
      ];
}

$texto = "Uma das coisas que aprendi é que se deve viver apesar de. Apesar de, se deve comer. Apesar de, se deve amar. Apesar de, se deve morrer. Inclusive muitas vezes é o próprio apesar de que nos empurra para a frente. Foi o apesar de que me deu uma angústia que insatisfeita foi a criadora de minha própria vida. Foi o apesar de que parei na rua e fiquei olhando para você enquanto você esperava um táxi. E desde logo desejando você, esse teu corpo que nem sequer é bonito, mas é o corpo que eu quero. Mas quero inteira, com a alma também. Por isso, não faz mal que você não venha, esperarei quanto tempo for preciso.";

echo "Texto analisado: " . "<br><br>" . $texto . "<br>";
echo "<br> O numero de palavras são: " . analisarTexto($texto)['O numero de palavras são'] . "<br>";
echo "O numero de caracteres são: " . analisarTexto($texto)['O numero de caracteres são'] . "<br>";
echo "O numero de vogais são: " . analisarTexto($texto)['O numero de vogais são'] . "<br>";
echo "O numero de consoantes são: " . analisarTexto($texto)['O numero de consoantes são'] . "<br>";