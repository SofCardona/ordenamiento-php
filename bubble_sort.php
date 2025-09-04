<?php

$numbers = [5, -2, 9, 1, 5, 6, -3, 0, 9];

echo "Lista original:\n";
print_r($numbers);

// Algoritmo Bubble Sort descendente
function bubbleSortDesc(array $arr): array {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Intercambio de valores
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

$sortedNumbers = bubbleSortDesc($numbers);

echo "\nLista ordenada (descendente):\n";
print_r($sortedNumbers);
?>
