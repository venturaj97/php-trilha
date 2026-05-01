<?php 

echo "Catalago de filmes
";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$somaDeNotas = 8.8;
$somaDeNotas += 7.5;
$somaDeNotas += 9;
$somaDeNotas += 8.5;
$somaDeNotas += 6;


$notaFilme = $somaDeNotas / 5;
$incluidoNoPlano = true;

echo "$notaFilme";