<?php 

echo "Catalago de filmes
";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Interestelar";
$nomeFilme = "O Rei Leão";


$anoLancamento = $argv[1] ?? 2022;
$somaDeNotas = 8.8;
$somaDeNotas += 7.5;
$somaDeNotas += 9;
$somaDeNotas += 8.5;
$somaDeNotas += 6;


$notaFilme = $somaDeNotas / 5;
$incluidoNoPlano = true;

echo "O filme $nomeFilme foi lançado em $anoLancamento e tem uma nota de $notaFilme\n";

if ($notaFilme > 8) {
    echo "O filme $nomeFilme é um filme excelente\n";
} else {
    echo "O filme $nomeFilme é um filme bom\n";
}

$genero = match($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Interestelar" => "Ficção Científica",
    "O Rei Leão" => "Animação",
    default => "Desconhecido",
};

echo "O filme $nomeFilme é um filme de $genero\n";