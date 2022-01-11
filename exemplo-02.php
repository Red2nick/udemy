<?php

$anoNascimento = 1990;

$nomeCompleto = "Lucas da Silva Pandagis";
// Na linha abaixo temos uma variável com número no nome.
$nome1 = "João";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit(); // utilizado para parar a compilação do codigo.

echo "<br/>"; // br/ é utilizado para realizar uma quebra de linha.

unset($nome1); // unset é utilizado para retirar um valor definido na variavel.

if (isset($nome1)) { // isset é utilizado para verificar se uma variavel já foi definida.

	echo $nome1;
}

?>