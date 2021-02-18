<?php
// Desenvolva uma função que receba como parametro uma string e responda se a string é um palíndromo sim (true) ou não (false).
// entenda o que é um palindromo https://brasilescola.uol.com.br/o-que-e/portugues/o-que-e-palindromo.htm
// strings com apenas 1 caracter são consideradas palindromo
// Exemplo para teste
// String "aabaa"  = true
// String "a" = true
// String "abac" = false

$entrada = 'aabaa';

$str = strtolower($entrada);

PALINDROMO($str);

function PALINDROMO($str)
{
    $tamanho = strlen($str);
    $palavra_reversa = strrev($str);

    if ($tamanho > 1) {
        if ($palavra_reversa === $str) {
            echo 'true';
        } else {
            echo 'false';
        }
    } else if ($tamanho == 1) {
        echo 'true';
    } else {
        echo 'false';
    }
}
