<?php 

echo "Catalago de filmes
";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Interestelar";
$nomeFilme = "O Rei Leão";


$anoLancamento = 2022;
$somaDeNotas = 0;

// $somaDeNotas += $argv[1];
// $somaDeNotas += $argv[2];
// $somaDeNotas += $argv[3];

for($contador = 1; $contador < $argc; $contador += 1) {
    $somaDeNotas += $argv[$contador];
}



$quantidadeDeNotas = $argc - 1;

$notaFilme = $somaDeNotas / $quantidadeDeNotas;
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