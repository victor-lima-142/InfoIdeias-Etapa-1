<?php
// Desenvolva uma função que receba como parametro um número da Área e retorne a quantidade de quadrados que compôem a área
// entenda a sequência lógica das ÁREAS analisando a imagem abaixo.
// Exemplo para teste
// N 2 = 5 
// N 3 = 13

$n = readline("Digite a área: ");

CalculaArea($n);

function CalculaArea($n)
{
    $area = 1;
    $numeroFinal = $n - 1;
    for ($contador = 1; $contador <= $numeroFinal; $contador++) {
        $aMultiplicar = $contador * 4;
        $area = $area + $aMultiplicar;
    }
    echo "N " . $n . " = " . $area . PHP_EOL;
}
