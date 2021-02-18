<?php
// Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.
// Exemplos para teste 
// Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
//          -  Sequencias com apenas um elemento são consideradas como TRUE
// [1, 3, 2, 1]  false
// [1, 3, 2]  true
// [1, 2, 1, 2]  false
// [3, 6, 5, 8, 10, 20, 15] false
// [1, 1, 2, 3, 4, 4] false
// [1, 4, 10, 4, 2] false
// [10, 1, 2, 3, 4, 5] true
// [1, 1, 1, 2, 3] false
// [0, -2, 5, 6] true
// [1, 2, 3, 4, 5, 3, 5, 6] false
// [40, 50, 60, 10, 20, 30] false
// [1, 1] true
// [1, 2, 5, 3, 5] true
// [1, 2, 5, 5, 5] false
// [10, 1, 2, 3, 4, 5, 6, 1] false
// [1, 2, 3, 4, 3, 6] true
// [1, 2, 3, 4, 99, 5, 6] true
// [123, -17, -5, 1, 2, 3, 12, 43, 45] true
// [3, 5, 67, 98, 3] true


$array = [1, 3, 2];
SequenciaCrescente($array);

function SequenciaCrescente(array $array)
{
    $original = $array;
    $comparador = $array;
    $tamanho = count($array);
    $false = [];

    for ($contador = 0; $contador < $tamanho; $contador++) {
        unset($array[$contador]);
        unset($comparador[$contador]);
        sort($array);

        $array_sem_repeticao = array_unique($array);
        $array_reindexado = array_values($array);
        $array_reindexado2 = array_values($comparador);

        if (count($original) <= 1) {
            echo "true";
            exit();
        } else {
            if ($array_reindexado == $array_reindexado2 && count($array_sem_repeticao) == count($array_reindexado)) {
                echo "true";
                exit();
            } else {
                array_push($false, $contador);
            }
        }

        $array = $original;
        $comparador = $original;
    }
    echo "false";
}
